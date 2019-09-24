<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class TeamsController extends Controller
{
    public function index(){
        $teams = Team::all();
        return view('AdminPanel.teams.index', compact('teams'));
    }
    public function form($id = 0){
        $entry = new Team;
        if($id > 0){
            $entry = Team::find($id);
        }
        return view('AdminPanel.teams.form', compact('entry'));
    }
    public function user_form($id){
        $users = User::where([
            ["command_id", "=", $id],
        ])->get();
        return view('AdminPanel.teams.userindex', compact('users'));
    }
    public function save($id = 0){
        //Validation

        //Logic

        //Save & return
        $data = request()->only('name', 'slug', 'img');
        if(!request()->filled('slug')) {
            $data['slug'] = Str::slug(request('name'));
            request()->merge(['slug'=>$data['slug']]);
        }

        $this->validate(request(), [
            'name' => 'required',
            'slug' => (request('original_slug') != request('slug') ? 'unique:teams,slug' : ''),
            'img' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048'
        ]);

        if(request()->hasFile('img'))
        {

            $img = request()->file('img');
            $img = request()->img;
            $img_name = $img->id . "-" . time() . "." . $img->extension();

            if($request->file($img_name)->isValid()){
                $img->move('images/users', $img_name);
            }
        }

        if($id > 0){
            $entry = Team::where('id', $id)->firstOrFail();
            $entry->update($data);
        } else {
            $entry = Team::create($data);
        }

        return redirect()
            ->route('AdminPanel.teams.edit', $entry->id)
            ->with('mesaj', ($id > 0 ? 'Yenilendi' : 'Yazıldı'))
            ->with('mesaj_tip', 'success');
    }
    public function delete(){

    }
}
