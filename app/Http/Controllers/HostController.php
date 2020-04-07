<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersPresenceCode;

class HostController extends Controller
{
    public function showHost(){
        return view('host/dashboard');
    }

    public function showPresenceIn(){
        $length = 6;
        $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
        
        $presencecode = new UsersPresenceCode;
        $presencecode->code = $randomletter;

        if($presencecode->save())
        {
            return view('host/presence_in', compact('randomletter'));
        }
    }

    public function showPresenceOut(){
        $length = 6;
        $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
        
        $presencecode = new UsersPresenceCode;
        $presencecode->code = $randomletter;

        if($presencecode->save())
        {
            return view('host/presence_out', compact('randomletter'));
        }
    }
}
