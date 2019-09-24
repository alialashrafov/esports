<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Reward;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RewardsController extends Controller
{
    public function index(){
        $list = Reward::all();
        return view('AdminPanel.rewards.index', compact('list'));
    }
}
