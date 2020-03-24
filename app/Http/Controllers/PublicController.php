<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class PublicController extends Controller
{
    public function showLogin(){
        return view('public/login');
    }

    public function showRegister(){
        return view('public/register');
    }

    public function register(Request $request){
        $request->validate([
            'name'      => 'required|min:5|max:255',
            'username'  => 'required|min:8|max:50|unique:users,username',
            'email'     => 'required|min:5|max:255|email:rfc|unique:users,email',
            'password'  => 'required|min:5|max:15',
            'institute' => 'min:5|max:100',
            'address'   => 'min:5|max:255',
            'phone'     => 'required|min:9|max:15'
        ]);

        $user = new User;
        $user->name         = $request->name; 
        $user->username     = $request->username; 
        $user->email        = $request->email; 
        $user->password     = Hash::make($request->password); 
        $user->institute    = $request->institute; 
        $user->address      = $request->address; 
        $user->phone        = $request->phone; 
        $user->role         = 'user';
        $user->validated    = false;

        if($user->save()){
            return redirect('/');
        }
    }

    public function logout(){
        request()->session()->flush();
        return redirect('/');
    }
}
