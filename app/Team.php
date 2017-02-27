<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    protected $fillable = [
        'tournament_id',
        'sportsradar_id',
        'name',
        'name_abbreviation',
        'country',
        'country_code',
    ];
}
