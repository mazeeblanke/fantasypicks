<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('season_id')->unsigned();

            $table->string('sportsradar_id', 100);
            $table->timestamp('scheduled');
            $table->string('status', 100);

            $table->string('home_team_id');
            $table->string('away_team_id');

            $table->float('probability_home_win')->nullable();
            $table->float('probability_away_win')->nullable();
            $table->float('probability_draw')->nullable();

            $table->timestamps();

            $table->foreign('season_id')->references('id')->on('seasons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
