<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        //dd($request->all());
        if(Auth::attempt($request->only('email','nisn','password'))){
            return redirect('/dashbor');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function nisn()
    {
        return('nisn');
    }
}
