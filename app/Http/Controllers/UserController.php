<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PresenceLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showUser(){
        return view('user/dashboard');
    }

    public function showPresenceIn(){
        return view('user/presence_in');
    }

    public function presenceIn(Request $request){
        $request->validate([
            'code'  => 'required|min:4|max:8'
        ]);        

        if($request->code == '123123')
        {
            $presence = new PresenceLog;
            $presence->user_id = Auth::user()->id;
            $presence->time_in = Carbon::now();

            if($presence->save()){
                return redirect('user');
            }
        }
    }

    public function presenceOut(){
        return view('user/presence_out');
    }

    public function presenceInfo(){
        return view('user/presence_info');
    }
}
