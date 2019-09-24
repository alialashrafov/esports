<?php

namespace App\Http\Controllers;
use App\Models\Tournament;

use Illuminate\Http\Request;

class TournamentsController extends Controller
{
    public function index() {
        $oyunlar = Tournament::all();
        return view('tours', compact('oyunlar'));
    }
}
