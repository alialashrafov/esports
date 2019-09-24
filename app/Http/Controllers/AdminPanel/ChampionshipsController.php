<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Championship;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChampionshipsController extends Controller
{
    public function index(){
        $list = Championship::all();
        return view('AdminPanel.championships.index', compact('list'));
    }
    public function champ_form($id){
        $teams = Team::where([[
            "championships_id", "=", $id
        ]])->get();
        return view('AdminPanel.championships.teams', compact('teams'));
    }
}
