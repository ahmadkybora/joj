<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\UserRequest;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(UserRequest $request)
    {
        //        'user_id', 'type', 'sex', 'first_name', 'last_name', 'username', 'email', 'home_phone', 'mobile', 'password', 'api_token'
        $user = new User();
        $user->sex = $request['sex'];
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->home_phone = $request['home_phone'];
        $user->mobile = $request['mobile'];
        $user->password = Hash::make($request['password']);
        $user->api_token = Str::random(80);
        $user->save();
        if ($user->save()) {
            Alert::success('موفقیت آمیز بود!', 'شما با موفقیت ثبت نام شدید!');
            return redirect()->route('home');
        } else {
            return redirect()->route('error.401');
        }
    }
}
