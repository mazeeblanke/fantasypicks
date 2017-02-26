<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = [
        'tournament_id',
        'sportsradar_id',
        'name',
        'start_date',
        'end_date',
        'scheduled_games',
        'played_games'
    ];
}
