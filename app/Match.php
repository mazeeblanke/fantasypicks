<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model {

    protected $fillable = [
        'season_id',
        'sportsradar_id',
        'scheduled',
        'status',
        'tournament_round',
        'home_team_id',
        'away_team_id'
    ];
}
