<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tournament extends Model
{
    use SoftDeletes;
    protected $table="tournaments";
    protected $guarded=[''];

    public function teams(){
        return $this->hasMany(Team::class , 'tournament_id' , 'id');
    }
}
