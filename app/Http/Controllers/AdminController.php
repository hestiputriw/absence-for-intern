<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PresenceLog;
use App\User;
use App\UsersPresenceCode;
use App\Violation;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function showDashboard(){
        return view('admin/dashboard');
    }
}
