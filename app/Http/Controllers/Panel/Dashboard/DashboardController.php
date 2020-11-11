<?php

namespace App\Http\Controllers\Panel\Dashboard;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{

    public function index()
    {
        return view('panel.dashboard.dashboard');
    }

    public function insert()
    {
        return view('panel.dashboard.insert');
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $admin = "admin";
        $user->user_id = 1;
        $user->sex = $request['sex'];
        $user->type = $admin;
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->home_phone = $request['home_phone'];
        $user->mobile = ['mobile'];
        $user->password = Hash::make($request['password']);
        $user->api_token = Str::random(80);
        $user->save();

        Alert::success('موفقیت آمیز بود!', 'کاربر با موفقیت ثبت شد!');
        return redirect()->route('users.index');
    }
}
