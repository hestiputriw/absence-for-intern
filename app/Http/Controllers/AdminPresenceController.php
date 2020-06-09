<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PresenceLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminPresenceController extends Controller
{
    public function showPresence(){
        return view('admin/presence');
    }

    public function showStatistic(){
        $users = User::all()->where('role', 'user');

        return view('admin/presence_statistic')->with(compact('users'));
    }

    public function statisticDay(){
        $date = Carbon::now();
        $users = User::where('role', 'user')->presences()->where('time_in', $date);

        return view('admin/presence_day')->with(compact('users'));
    }

    public function showViolations(){
        $date = Carbon::now()->subDays(1);
        $users = User::all()->presences()->where('time_out', $date)->get();

        return view('admin/violations')->with(compact('users'));
    }

    public function showViolationLogs(){
        $date = Carbon::now();
        $users = User::all()->presences()->where('time_out', $date)->get();
        
        return view('admin/violation_log')->with(compact('users'));
    }

    public function access($id){
        // User::findOrFail($id)->update(['validated' => 0]);
        return redirect()->back();
    }
}
