<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{
    public function showUser()
    {
        return view('admin/user');
    }

    public function showValidateUser($id)
    {
    }

    public function validateUser($id)
    {
        User::findOrFail($id)->update(['validated' => 1]);
        return redirect()->back();
    }

    public function unvalidateUser($id)
    {
        User::findOrFail($id)->update(['validated' => 0]);
        return redirect()->back();
    }

    public function showUpdateUser($id)
    {
        return view('admin/user_update');
    }

    public function updateUser($id)
    {
    }

    public function deleteUser($id)
    {
    }
}
