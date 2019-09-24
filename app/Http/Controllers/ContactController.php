<?php

namespace App\Http\Controllers;

use App\Mail\ContactForMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function  index()
    {

        return view('contact');
    }

    public function post() {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Mail::to('test@test.com')->send(new ContactForMail($data));
        return redirect()->route('contact');
    }
}
