<?php

namespace App\Http\Controllers;

use App\Models\Oyuncular;
use App\Models\User;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function create(){
//        $gamer = new User();
//
////        if( $gamer->is_user === Oyuncular::USER){
////
////            // userdi
////        }else {
////            // teamdi
////        }
//
//        return view('user_registration');
    }
    // meselen bir dene auth var user - ler ucun, birin de yaratmaq isteyirem komanda girisi ucun

    public function store(Request $request){

        $validated = $request->validate(  [
            'name' => 'required',
            'email' => 'required|email',
//            TODO: min:1
            'password' => 'min:1|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:1',

            'phone' => 'required',
            'status' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $img = $validated['img'];

        $new_name = random_int(100,100000000) . "_". md5(time()) . "." . $img->getClientOriginalExtension();

        $img->move(public_path("images"), $new_name);

        $validated['img'] = $new_name;
//        $user = Oyuncular::save(request(['name', 'status', 'slug'  => str_slug(request(), ['name'], '-'), ]));
        $user = Oyuncular::create($validated);
        auth()->login($user);

//        return redirect()->to('/');
    }

}
