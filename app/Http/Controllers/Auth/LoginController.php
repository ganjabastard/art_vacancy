<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\WhiteIp;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserLog;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct ()
    {
        $this->middleware('guest', ['except' => ['logout', 'login']]);
    }

    public function loginForm()
    {
        if(Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('auth.login');
        }
    }

    public function login (Request $request)
    {
        // white ip
        if(env('WHITE_IP', true) == true && WhiteIp::where('ip', ip2long($_SERVER['REMOTE_ADDR']))->where('active', 1)->get()->count() == 0)
            return response()->json(['auth' => 'black']);
        Auth::attempt(['email' => $request->email, 'password' => $request->pwd]);
        if (Auth::check()) {
            // enabled/disabled user
            if(Auth::user()->active == 0) {
                Auth::logout();
                return response()->json(['auth' => 'block']);
            } else {
                return response()->json(['auth' => true]);
            }
        } else
            return response()->json(['auth' => false]);
    }

    public function logout ()
    {
        Auth::logout();
        return redirect('/');
    }
}
