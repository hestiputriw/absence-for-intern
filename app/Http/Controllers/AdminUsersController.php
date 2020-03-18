<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUsersController extends Controller
{
    public function showUsers()
    {
        $users = User::where('role', 'user')->get();
        return view('admin/users', compact('users'));
    }

    public function showValidatedUsers()
    {
        $users = User::where('role', 'user')->where('validated', 1)->get();
        return view('admin/users_validated', compact('users'));
    }

    public function showUnvalidatedUsers()
    {
        $users = User::where('role', 'user')->where('validated', 0)->get();
        return view('admin/users_unvalidated', compact('users'));
    }
}
