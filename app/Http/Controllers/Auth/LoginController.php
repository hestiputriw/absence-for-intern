<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('public.login');
    }

    public function username()
    {
        return 'username';
    }

    public function redirectTo(){
        // User role
        $role = auth()->user()->role; 
        
        // Check user role
        switch ($role) {
            case 'admin':
                    return '/admin';
                break;
            case 'host':
                    return '/host';
                break; 
            default:
                    return '/user'; 
                break;
        }
    }
}
