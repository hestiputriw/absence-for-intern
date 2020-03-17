<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function showLogin(){
        return view('public/login');
    }

    public function login(){

    }

    public function showRegister(){
        return view('public/register');
    }

    public function register(){

    }

    public function logout(){
        
    }
}
