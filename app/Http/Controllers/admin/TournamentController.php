<?php

namespace App\Http\Controllers\admin;

use App\Match;
use App\Season;
use App\Team;
use App\Tournament;
use DateTime;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TournamentController extends Controller {

    /**
     * Change the tournament on which the website runs on.
     *
     * @param Request $request
     */
    public function set (Request $request, Client $client)
    {
        $tournamentId = 'sr:tournament:' . request('id');

        $response = $client->get('https://api.sportradar.us/soccer-t3/eu/en/tournaments/' . $tournamentId . '/info.json?api_key=' . env('SPORTSRADAR_API_KEY'));
        $response = json_decode($response->getBody(), true);

        // Get tournament information.
        $tournament = Tournament::create([
            'sportsradar_id' => $response[ 'tournament' ][ 'id' ],
            'name'           => $response[ 'tournament' ][ 'name' ],
        ]);

        // Get tournament's current season
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
            Match::create([
                'season_id'        => $season->id,
                'sportsradar_id'   => $match[ 'id' ],
                'scheduled'        => date('Y-m-d H:i:s', strtotime($match[ 'scheduled' ])),
                'status'           => $match[ 'status' ],
                'tournament_round' => $match[ 'tournament_round' ][ 'number' ],
                'home_team_id' => $match['competitors'][0]['id'],
                'away_team_id' => $match['competitors'][1]['id']
            ]);
        }

        return back()->with('alert-success', 'All information was gathered successfully.');
    }
}
