<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Models\UserLog;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

//    public function username()
//    {
//        return 'email';
//    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8'
        ]);

        if (Auth::attempt([
            'username' => $request['username'],
            'password' => $request['password'],
        ])) {
            $user = Auth::user();
            $user_logs = new UserLog();
            $user_logs->user_id = $user->id;
            $user_logs->username = $user->username;
            $user_logs->ip = $request->ip();
            $user_logs->system_info = $request->server('HTTP_USER_AGENT');
            $user_logs->last_login = Carbon::now();
            $user_logs->save();
        }
        ///////////////////////
        if ($user->type == 0) {
            Alert::success('موفقیت آمیز بود!', 'شما با موفقیت وارد پنل شدید');
            return redirect()->route('dashboard');
        } else {
            Alert::success('موفقیت آمیز بود!', 'شما با موفقیت وارد شدید');
            return redirect()->route('home');
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $user_logs = new UserLog();
        $user_logs->last_logout = Carbon::now();
        return redirect()->route('home');
    }
}
