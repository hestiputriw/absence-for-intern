<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function showUsers(){
        return view('admin/users');
    }

    public function showValidatedUsers(){
        return view('admin/users_validated');
    }

    public function showUnvalidatedUsers(){
        return view('admin/users_unvalidated');
    }
}
