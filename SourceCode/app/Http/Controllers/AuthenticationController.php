<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function show(Request $request){
        $baseVariable['title'] = 'Login';
        return view('login', $baseVariable);
    }

    public function showRegister(Request $request){
        $baseVariable['title'] = "Register";
        return view('register', $baseVariable);
    }
}
