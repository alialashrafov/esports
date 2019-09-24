<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RewardTeam extends Model
{
    protected $table = 'reward_to_team';
    protected $primaryKey = 'id';
    public $timestamps = false;
// biz indi reward_to_team cedvelindeyik . ona gore bizim lokal key team_id di
// indi komandalar cedveline relation qurmaq isteyirik ona gorede xarici key bizim ucun
// komandalar cedvelnin  id si di

// bunu basha dushdun
//anladim
    public function teams(){
        return $this->hasMany(Team::class, 'id', 'team_id');
    }

    public function rewards(){
        return $this->hasMany(Reward::class, 'id', 'reward_id');
    }

}
