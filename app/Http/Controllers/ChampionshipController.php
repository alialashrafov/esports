<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChampionshipController extends Controller
{
    public function index(){
        return view('championship');

    }
}
