<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Reward;
use App\Models\Oyuncular;
use App\Models\Tournament;
use Illuminate\Http\Request;

class GamerController extends Controller
{
    public function show($command_id){


        $oyuncular  = Oyuncular::where([
            [ "command_id" , "=" , $command_id ],
        ])->get();


        return view("gamers" , [
            "gamers" => $oyuncular,
        ]);
    }

    public function get($id){
        $gamer = Oyuncular::find($id);
        $team = Team::where([
            ["oyuncu_id", "=", $id],
            ])->get();

        $tournaments = Tournament::where([[
            "komandalar_id", "=", "team->id"
        ],])->get();
//        oyuncudan rewardsa kecmek olar ele isteyirsen de ? aha sadece men enisli yoxuslu gedirem
//        indi sebr ele


        dd($tournaments);

        return view('gamer', [
            "gamer" => $gamer,
            "teams" => $team
        ]);
    }

}
