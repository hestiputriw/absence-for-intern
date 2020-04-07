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
        $users = User::findOrFail($id);

        return view('admin/user_update', compact('users'));
    }

    public function updateUser($id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'      => 'required|min:5|max:255',
            'username'  => 'nullable|min:8|max:50|unique:users,username',
            'email'     => 'required|min:5|max:255|email:rfc|unique:users,email',
            'password'  => 'nullable|min:5|max:15',
            'institute' => 'min:5|max:100',
            'address'   => 'min:5|max:255',
            'phone'     => 'required|min:9|max:15'
        ]);

        if ($request->isDirty('name')) {
            $user->name = $request->name;
        }
        if ($request->isDirty('username')) {
            $user->username = $request->username;
        }
        if ($request->isDirty('email')) {
            $user->email = $request->email;
        }
        if ($request->isDirty('password')) {
            $user->password = Hash::make($request->password);
        }
        if ($request->isDirty('institute')) {
            $user->institute = $request->institute;
        }
        if ($request->isDirty('address')) {
            $user->address = $request->address;
        }
        if ($request->isDirty('phone')) {
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
