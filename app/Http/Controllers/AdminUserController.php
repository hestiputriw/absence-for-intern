<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function showUser(){
        return view('admin/user');
    }

    public function showValidateUser($id){

    }

    public function validateUser($id){

    }

    public function unvalidateUser($id){

    }

    public function showUpdateUser($id){
        return view('admin/user_update');
    }

    public function updateUser($id){

    }

    public function deleteUser($id){
        
    }
}
