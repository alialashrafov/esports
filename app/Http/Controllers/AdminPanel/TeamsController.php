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
        $data = request()->only('name', 'slug');
        if(!request()->filled('slug')) {
            $data['slug'] = Str::slug(request('name'));
            request()->merge(['slug'=>$data['slug']]);
        }

        $this->validate(request(), [
            'name' => 'required',
            'slug' => (request('original_slug') != request('slug') ? 'unique:teams,slug' : '')
        ]);

        if($id > 0){
            $entry = Team::where('id', $id)->firstOrFail();
            $entry->update($data);
        } else {
            $entry = Team::create($data);
        }

        if(request()->hasFile('img'))
        {
            $this->validate(request(), [
                'img' => 'image|mimes:jpg,png,jpeg,gif|max:2048'
            ]);
            $img = request()->file('img');
            $img = request()->img;
            $img_name = $entry->id . "-" . time() . "." . $img->extension();

            if($request->file($img_name)->isValid()){
                $img->move('images/users', $img_name);
            }
        }
        return redirect()
            ->route('AdminPanel.teams.edit', $entry->id)
            ->with('mesaj', ($id > 0 ? 'Yenilendi' : 'Yazıldı'))
            ->with('mesaj_tip', 'success');
    }
    public function delete(){

    }
}
