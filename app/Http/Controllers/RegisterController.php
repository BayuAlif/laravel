<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('sanbercode.register');
    }
    public function welcome(Request $request){
        $firstName = $request->input('fname');
        $lastName = $request->input('lname');

        return view('sanbercode.welcome', ['firstName' => $firstName, 'lastName' => $lastName]);
    }
}
