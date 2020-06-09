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
        $users = User::whereHas('presences', function($query){
            $query->whereDate('time_in', Carbon::today());
        })->get();

        return view('admin/presence_day')->with(compact('users'));
    }

    public function showViolations(){
        $users = User::whereHas('violations', function($query){
            $query->where('access', 0);
        })->get();

        return view('admin/violations')->with(compact('users'));
    }

    public function showViolationLogs(){
        $date = Carbon::now();
        $users = User::all()->presences()->where('time_out', $date)->get();

        return view('admin/violation_log')->with(compact('users'));
    }

    public function violationAccess($id){
        $user = User::findOrFail($id);
        $last_presence = $user->presences->last();
        $last_violation = $user->violations->last();

        $last_violation->access = 1;
        $last_violation->save();

        $last_presence->time_out = Carbon::parse($last_presence->time_in)->addHours(6);
        $last_presence->save();

        return redirect()->back();
    }
}
