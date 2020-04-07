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
        $user = User::findOrFail($id);
        
        return view('admin/user_update', compact('user'));
    }

    public function updateUser($id, Request $request)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'      => 'required|min:5|max:255',
            'username'  => 'required|min:8|max:50|unique:users,username,' . $user->id,
            'email'     => 'required|min:5|max:255|email:rfc|unique:users,email,' . $user->id,
            'institute' => 'min:5|max:100',
            'address'   => 'min:5|max:255',
            'phone'     => 'required|min:9|max:15'
        ]);

        if ($request->name != $user->name) {
            $user->name = $request->name;
        }
        if ($request->username != $user->username) {
            $user->username = $request->username;
        }
        if ($request->email != $user->email) {
            $user->email = $request->email;
        }
        if ($request->institute != $user->institute) {
            $user->institute = $request->institute;
        }
        if ($request->address != $user->address) {
            $user->address = $request->address;
        }
        if ($request->phone != $user->phone) {
            $user->phone = $request->phone;
        }

        if ($user->save()) {
            return redirect()->back()->with('message', 'Your`e Update was Successfully!');
        }
    }

    public function deleteUser($id)
    {
    }
}
