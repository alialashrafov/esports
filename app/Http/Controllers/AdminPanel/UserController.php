<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login()
    {
        if (request()->isMethod('POST')) {
            $this->validate(request(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);
            $credentials = [
                'email' => request()->get('email'),
                'password' => request()->get('password'),
                'is_admin' => 1
            ];
            if (auth()->attempt($credentials, request()->has('rememberme'))) {
                return redirect()->route('AdminPanel.index');

            } else {
//                return back()->withInput()->withErrors(['email' => 'Giriş Xetalıdır!']);
                return redirect()->route('AdminPanel.index');
            }
        }
        return view('AdminPanel.login');
    }

    public function logout(){}

    public function index()
    {
        $list = User::orderByDesc('created_at')->paginate('8');
        return view('AdminPanel.users.index', compact('list'));
    }

    public function form($id = 0)
    {
        $entry = new User;
        if($id > 0)
        {
            $entry = User::find($id);
        }

        return view('AdminPanel.users.form', compact('entry'));
    }


    public function save( Request $request , $id = 0){

        $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "phone" => 'required',
        ]);

        $data = request()->only('name', 'email', 'phone');
        if(request()->filled('password')){
            $data['password'] = Hash::make(request('password'));
        }
        $data['status'] = request()->has('status') ? 1 : 0;
        $data['is_admin'] = request()->has('is_admin') ? 1 : 0;


        if($id > 0){
            $entry=User::where('id', $id)->firstOrFail();
            $entry->update($data);
        }
        else
        {
            $entry = User::create($data);
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
            ->route('AdminPanel.users.edit', $entry->id)
            ->with('mesaj', ($id > 0 ? 'Yeniləndi' : 'Yaddaşa Yazıldı'))
            ->with('mesaj_tip', 'success');
    }
}