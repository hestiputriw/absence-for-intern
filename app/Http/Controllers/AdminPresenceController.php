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
        $users = User::all();

        return view('admin/presence_statistic')->with(compact('users'));
    }

    public function statisticDay(){
        $users = User::all()->where('role', 'user');
        $presences = PresenceLog::all()->where('time_in', Carbon::now());

        return view('admin/presence_day')->with(compact('users', 'presences'));
    }

    public function showViolations(){
        $users = DB::table('users')
                ->join('presence_logs', function ($join) {
                    $join->on('users.id', '=', 'presence_logs.user_id')
                        ->where('presence_logs.time_in', '!=', Carbon::now());
                })
                ->get();
        return view('admin/violations')->with(compact('users'));
    }

    public function showViolationLogs(){
        return view('admin/violation_log');
    }
}
