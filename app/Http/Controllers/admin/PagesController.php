<?php

namespace App\Http\Controllers\admin;

use App\Tournament;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index (Client $client)
    {
        $currentTournament = (Tournament::first()) ? Tournament::first()->name : null;

        // Get all tournaments from api
        $response = $client->get('https://api.sportradar.us/soccer-t3/eu/en/tournaments.json?api_key='.env('SPORTSRADAR_API_KEY'));
        $array = json_decode($response->getBody(), true);

        $tournaments = [];
        foreach ( $array[ 'tournaments' ] as $tournament )
        {
            $tournaments[substr($tournament['id'], strrpos($tournament['id'], ':')+1, strlen($tournament['id'])-strrpos($tournament['id'], ':'))] = substr($tournament['id'], strrpos($tournament['id'], ':')+1, strlen($tournament['id'])-strrpos($tournament['id'], ':')) . ' - ' . $tournament['name'];
        }

        return view('admin.index', compact(['tournaments', 'currentTournament']));
    }
}
