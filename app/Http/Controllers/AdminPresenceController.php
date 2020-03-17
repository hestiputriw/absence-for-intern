<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPresenceController extends Controller
{
    public function showPresence(){
        return view('admin/presence');
    }

    public function showStatistic(){
        return view('admin/presence_statistic');
    }

    public function statisticDay(){
        return view('admin/presence_day');
    }

    public function showViolations(){
        return view('admin/violations');
    }

    public function showViolationLogs(){
        return view('admin/violation_log');
    }
}
