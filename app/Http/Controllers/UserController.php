<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PresenceLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Violation;
use App\UsersPresenceCode;

class UserController extends Controller
{
    public function showUser()
    {
        return view('user/dashboard');
    }

    public function showPresenceIn()
    {
        $this->validateUser();

        return view('user/presence_in');
    }

    public function presenceIn(Request $request)
    {
        $request->validate([
            'code'  => 'required|min:4|max:8'
        ]);

        if(!$this->violationCheck())
        {
            return redirect('user')->with('error', 'You have not done presence out last time !, please contact admin to complete this action');
        }

        $checkcode = UsersPresenceCode::where('code', $request->code)->first();
        // $checkcode = UsersPresenceCode::where('code', $request->code)->whereTime('created_at', '>', Carbon::now()->subSeconds(60))->first();
        if ($checkcode != null) {
            /// Check If Log is Exist
            $checkPresence = User::findOrFail(Auth::user()->id)
            ->presences()
            ->whereDate('time_in', Carbon::today())
            ->first();

            if (!$checkPresence) {
                /// Create Presence Log
                $presence = new PresenceLog;
                $presence->user_id = Auth::user()->id;
                $presence->time_in = Carbon::now();

                if ($presence->save()) {
                    return redirect('user')->with('success', 'Your`e Presence was Successfully!');
                    // return redirect('user');
                }
            } else {
                return redirect('user')->with('error', 'You already have a presence today!');
            }
        } else {
            return redirect()->back()->with('error', 'Your`e Code not match!');
        }

    }

    public function showPresenceOut()
    {
        $this->validateUser();

        return view('user/presence_out');
    }

    public function presenceOut(Request $request)
    {
        $request->validate([
            'code'  => 'required|min:4|max:8'
            ]);
            
            if(!$this->violationCheck())
            {
                return redirect('user')->with('error', 'You have not done presence out last time !, please contact admin to complete this action');
            }
            
            $checkcode = UsersPresenceCode::where('code', $request->code)->first();
            // $checkcode = UsersPresenceCode::where('code', $request->code)->whereTime('created_at', '>', Carbon::now()->subSeconds(10))->first();
            
            if ($checkcode != null) {
                /// Check If Log is Exist
                $checkPresence = User::findOrFail(Auth::user()->id)
                ->presences()
                ->whereDate('time_out', Carbon::today())
                ->first();
                
                if (!$checkPresence) {
                    /// Create Presence Log
                    $presence = User::findOrFail(Auth::user()->id)->presences->last();
                    $presence->time_out = Carbon::now();
                    // dd('berhasil');

                if ($presence->save()) {
                    return redirect('user')->with('success', 'Your`e Presence was Successfully!');
                    // return redirect('user');
                }
            } else {
                return redirect('user')->with('error', 'You already have a presence today!');
            }
        } else {
            return redirect()->back()->with('error', 'Your`e Code not match!');
        }
    }

    public function showProfile()
    {
        return view('user/profile');
    }

    public function profile()
    {
    }

    public function showUpdateProfile(User $user)
    {
        $user = Auth::user();
        return view('user/profile_update', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name'      => 'required|min:5|max:255',
            'username'  => 'nullable|min:8|max:50|unique:users,username,' . $user->id,
            'email'     => 'nullable|min:5|max:255|email:rfc|unique:users,email,' . $user->id,
            'password'  => 'nullable|min:5|max:15',
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
        if ($request->password != $user->password) {
            $user->password = Hash::make($request->password);
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

    public function presenceInfo()
    {
        $user = Auth::user()->id;
        // $presences = PresenceLog::all();
        $presences = User::findOrFail($user)->presences;

        return view('user/presence_info')->with(compact('presences'));
    }

    public function violationCheck()
    {
        $checkViolation = User::findOrFail(Auth::user()->id);

        if($checkViolation->presences()->whereDate('time_in', '<', Carbon::today())->exists()){
            $lastViolation = $checkViolation->presences->where('time_in', '<', Carbon::today())->last();
            $violationExists = $checkViolation->violations()->exists();

            if($lastViolation->time_out == null){
                if(!$violationExists ||!Carbon::create(User::find(Auth::user()->id)->violations->last()->violation_date)
                ->isSameDay($lastViolation->time_in)){
                    $violation = new Violation;
                    $violation->user_id = Auth::user()->id;
                    $violation->violation_date = $lastViolation->time_in;
                    $violation->save();
                }
                return false;
            }
        }
        return true;
    }

    public function validateUser()
    {       
        $validate = Auth::user()->validated;

        if(!$validate){
            return redirect('user')->with('error', 'Please, contact admin to validate Account!');
        }
    }
}
