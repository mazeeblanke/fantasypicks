<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model {

    protected $dates = [
        'scheduled'
    ];

    protected $fillable = [
        'season_id',
        'sportsradar_id',
        'scheduled',
        'status',
        'tournament_round',
        'home_team_id',
        'away_team_id'
    ];

    public function home_team ()
    {
        return $this->belongsTo(Team::class, 'home_team_id', 'sportsradar_id');
    }

    public function away_team ()
    {
        return $this->belongsTo(Team::class, 'away_team_id', 'sportsradar_id');
    }
}
