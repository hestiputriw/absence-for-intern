<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'validated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function presences()
    {
        return $this->hasMany('App\PresenceLog');
    }

    public function violations()
    {
        return $this->hasMany('App\Violation');
    }

    public function codes()
    {
        return $this->hasMany('App\UsersPresenceCode');
    }

    public function workHour()
    {
        $user_logs = $this->presences();
        $workHour = 0;

        foreach ($user_logs as $user_log) {
            $start = Carbon::parse($user_log->time_in);
            $end = Carbon::parse($user_log->time_out);
            $workHour += $end->diffInHours($start);
        }
        return $workHour;
    }

    public function workDay()
    {
        $user_logs = $this->presences();
        $workDay = 0;

        foreach ($user_logs as $user_log) {
            $workDay += 1;
        }
        return $workDay;
    }

    public function totalDay()
    {
        $start = Carbon::parse($this->start_working_date);
        $end = Carbon::parse(Carbon::now());
        $totalDay += $end->diffInDays($start);

        return $totalDay;
    }


    public function hourPercentage()
    {
        $workHour = $this->workHour();
        $totalHour = $this->totalDay()*8;

        $hourPercen = ($workHour/$totalHour)*100;
        return $hourPercen;
    }

    public function presencePercentage()
    {
        $workDay = $this->workDay();
        $totalDay = $this->totalDay();
        $presencePercen = ($workDay/$totalDay)*100;

        return $presencePercen;
    }

    public function totalViolations()
    {
        $user_logs = $this->presences();
        $violation = 0;

        foreach ($user_logs as $user_log) {
            $violation += 1;
        }
        return $violation;
    }
}
