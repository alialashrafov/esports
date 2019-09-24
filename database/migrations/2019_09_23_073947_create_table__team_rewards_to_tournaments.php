<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTeamRewardsToTournaments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TeamRewardsToTournaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tournament_id')->nullable();
            $table->integer('reward_id')->nullable();
            $table->integer('team_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TeamRewardsToTournaments');
    }
}
