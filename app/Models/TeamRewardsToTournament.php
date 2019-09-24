<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamRewardsToTournament extends Model
{

    protected $table = 'team_rewards_tournaments';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function teams() {
        return $this->hasMany(Team::class, 'id', 'team_id');
    }

    public function reward(){
        return $this->hasOne(Reward::class, 'id', 'reward_id')->get();
    }



}
