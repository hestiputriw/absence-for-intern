<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser(){
        return view('user/dashboard');
    }

    public function presenceIn(){
        return view('user/presence_in');
    }

    public function presenceOut(){
        return view('user/presence_out');
    }

    public function presenceInfo(){
        return view('user/presence_info');
    }
}
