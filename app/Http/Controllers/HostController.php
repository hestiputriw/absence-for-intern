<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostController extends Controller
{
    public function showHost(){
        return view('host/dashboard');
    }

    public function showPresenceIn(){
        return view('host/presence_in');
    }

    public function presenceIn(){

    }

    public function showPresenceOut(){
        return view('host/presence_out');
    }

    public function presenceOut(){
        
    }
}
