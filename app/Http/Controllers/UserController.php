<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PresenceLog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\UsersPresenceCode;

class UserController extends Controller
{
    public function showUser()
    {
        return view('user/dashboard');
    }

    public function showPresenceIn()
    {
        return view('user/presence_in');
    }

    public function presenceIn(Request $request)
    {
        $request->validate([
            'code'  => 'required|min:4|max:8'
        ]);
        $checkValid = PresenceLog::findOrFail(Auth::user()->id)
        ->whereDate('time_out', Carbon::yesterday());

        $checkcode = UsersPresenceCode::where('code', $request->code)->whereTime('created_at', '>', Carbon::now()->subSeconds(60))->first();

        if($checkValid !=null){
            if ($checkcode != null) {
                /// Check If Log is Exist
                $checkPresence = PresenceLog::findOrFail(Auth::user()->id)
                ->whereDate('time_in', Carbon::today())
                ->first();
    
                if (!$checkPresence) {
                    /// Create Presence Log
                    $presence = new PresenceLog;
                    $presence->user_id = Auth::user()->id;
                    $presence->time_in = Carbon::now();
    
                    if ($presence->save()) {
                        return redirect('user')->with('message', 'Your`e Presence was Successfully!');
                        // return redirect('user');
                    }
                } else {
                    return redirect('user')->with('message', 'You already have a presence today!');
                }
            } else {
                return redirect()->back()->with('message', 'Your`e Code not match!');
            }
        }
        else{
            return redirect()->back()->with('message', 'Please contact Admin for get presence. 
            Because you dont have presence out yesterday!');
        }
    }

    public function showPresenceOut()
    {
        return view('user/presence_out');
    }

    public function presenceOut()
    {
        $request->validate([
            'code'  => 'required|min:4|max:8'
        ]);

        $checkcode = UsersPresenceCode::where('code', $request->code)->whereTime('created_at', '>', Carbon::now()->subSeconds(10))->first();

        $checkValid = PresenceLog::where('user_id', Auth::user()->id)
            ->whereDate('time_in', Carbon::today());

        if($checkValid !=null){
            if ($checkcode != null) {
                /// Check If Log is Exist
                $checkPresence = PresenceLog::where('user_id', Auth::user()->id)
                ->whereDate('time_out', Carbon::today())
                ->first();
    
                if (!$checkPresence) {
                    /// Create Presence Log
                    $presence = new PresenceLog;
                    $presence->user_id = Auth::user()->id;
                    $presence->time_out = Carbon::now();
    
                    if ($presence->save()) {
                        return redirect('user')->with('message', 'Your`e Presence was Successfully!');
                        // return redirect('user');
                    }
                } else {
                    return redirect('user')->with('message', 'You already have a presence today!');
                }
            } else {
                return redirect()->back()->with('message', 'Your`e Code not match!');
            }
        }
        else{
            return redirect()->back()->with('message', 'You dont have presence in today!');
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
}
