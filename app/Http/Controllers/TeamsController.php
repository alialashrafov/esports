<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Oyuncular;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index(){
        $teams = Team::all();

        return view('teams', compact('teams'));
    }

}
