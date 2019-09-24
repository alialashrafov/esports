<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Team;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TournamentsController extends Controller
{
    public function index(){
        $list = Tournament::all();
        return view('AdminPanel.tournaments.index', compact('list'));
    }

    public function tour_form($id){
        $list = Team::where([
            ["tournament_id", "=", $id],
        ])->get();
        return view('AdminPanel.tournaments.teamsindex', compact('list'));
    }
}
