<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Settings;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function index(){
//        if(request()->filled('searching')){
//            request()->flash();
//            $searching = request('searching');
//
          $parametrler = Settings::all();

          return view('AdminPanel.settings.index', compact('parametrler'));
    }
}
