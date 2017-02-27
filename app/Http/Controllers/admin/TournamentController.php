<?php

namespace App\Http\Controllers\admin;

use App\Match;
use App\Season;
use App\Team;
use App\Tournament;
use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\CountValidator\Exception;

class TournamentController extends Controller {

    /**
     * Change the tournament on which the website runs on.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function set (Request $request, Client $client)
    {
        $this->validate($request, [
            'id' => 'required|numeric'
        ]);

        set_time_limit(3600);

        $tournament = Tournament::first();

        if ( $tournament )
            $tournament->delete();

        $tournamentId = 'sr:tournament:' . request('id');

        $response = $client->get('https://api.sportradar.us/soccer-t3/eu/en/tournaments/' . $tournamentId . '/info.json?api_key=' . env('SPORTSRADAR_API_KEY'));
        $response = json_decode($response->getBody(), true);

        // Get tournament information.
        if ( ! empty($response) )
        {
            $tournament = Tournament::create([
                'sportsradar_id' => $response[ 'tournament' ][ 'id' ],
                'name'           => $response[ 'tournament' ][ 'name' ],
            ]);

            // Get tournament's current season
            if ( isset($response[ 'tournament' ][ 'current_season' ]) )
            {
                $season = Season::create([
                    'tournament_id'   => $tournament->id,
                    'sportsradar_id'  => $response[ 'tournament' ][ 'current_season' ][ 'id' ],
                    'name'            => $response[ 'tournament' ][ 'current_season' ][ 'name' ],
                    'start_date'      => $response[ 'tournament' ][ 'current_season' ][ 'start_date' ],
                    'end_date'        => $response[ 'tournament' ][ 'current_season' ][ 'end_date' ],
                    'scheduled_games' => $response[ 'season_coverage_info' ][ 'scheduled' ],
                    'played_games'    => $response[ 'season_coverage_info' ][ 'played' ],
                ]);

                // Get tournament season's teams
                foreach ( $response[ 'groups' ][ 0 ][ 'teams' ] as $team )
                {
                    Team::create([
                        'tournament_id'     => $tournament->id,
                        'sportsradar_id'    => $team[ 'id' ],
                        'name'              => $team[ 'name' ],
                        'name_abbreviation' => $team[ 'abbreviation' ],
                        'country'           => $team[ 'country' ],
                        'country_code'      => $team[ 'country_code' ],
                    ]);
                }

                // Get tournament season's matches
                sleep(1);
                $response = $client->get('https://api.sportradar.us/soccer-t3/eu/en/tournaments/' . $tournamentId . '/schedule.json?api_key=' . env('SPORTSRADAR_API_KEY'));
                $response = json_decode($response->getBody(), true);

                foreach ( $response[ 'sport_events' ] as $match )
                {
                    $newMatch = new Match;

                    $newMatch->season_id = $season->id;
                    $newMatch->sportsradar_id = $match[ 'id' ];
                    $newMatch->scheduled = date('Y-m-d H:i:s', strtotime($match[ 'scheduled' ]));
                    $newMatch->status = $match[ 'status' ];
                    $newMatch->home_team_id = $match[ 'competitors' ][ 0 ][ 'id' ];
                    $newMatch->away_team_id = $match[ 'competitors' ][ 1 ][ 'id' ];

                    // Get match win probability if match is not_started
                    if ( $match[ 'status' ] == 'not_started' )
                    {
                        sleep(1);
                        try
                        {
                            $probabilityResponse = $client->get('https://api.sportradar.us/soccer-t3/eu/en/matches/' . $match[ 'id' ] . '/probabilities.json?api_key=' . env('SPORTSRADAR_API_KEY'));
                            if ( $probabilityResponse->getStatusCode() == 200 )
                            {
                                $probabilities = json_decode($probabilityResponse->getBody(), true)[ 'probabilities' ];

                                $newMatch->probability_home_win = $probabilities[ 'markets' ][ 0 ][ 'outcomes' ][ 0 ][ 'probability' ];
                                $newMatch->probability_away_win = $probabilities[ 'markets' ][ 0 ][ 'outcomes' ][ 1 ][ 'probability' ];
                                $newMatch->probability_draw = $probabilities[ 'markets' ][ 0 ][ 'outcomes' ][ 2 ][ 'probability' ];
                            }
                        } catch ( ClientException $e )
                        {
                            // Handle appropriately
                        }
                    }

                    $newMatch->save();
                }
            }
        }

        return back()->with('alert-success', 'Our databases have been updated accordingly.');
    }
}
