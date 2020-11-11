<?php

namespace App\Http\Controllers\Panel\User;

use App\Http\Models\ImageModel;
use App\Http\Requests\UserRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(10);
        return view('panel.users.index', compact('users'));
    }

    public function insert()
    {
        return view('panel.users.insert');
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->user_id = 1;
        $user->sex = $request['sex'];
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->home_phone = $request['home_phone'];
        $user->mobile = $request['mobile'];
        $user->password = Hash::make($request['password']);
        $user->api_token = Str::random($request['api_token']);
        $user->save();
        //////////////////////
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->move('panel/img/users', $fileName);
        $image = new ImageModel($request->all());
        Image::make($image->path = $path)->fit(50, 50);
        $user->images()->save($image);
        //////////////////////
        Alert::success('موفقیت آمیز بود!', 'کاربر با موفقیت ثبت شد!');
        //////////////////////
        return redirect()->route('users.index');
    }

    public function show(Request $request)
    {
        $user = User::findOrFail($request->id);
        return view('panel.users.show', compact('user'));
    }

    public function edit(Request $request)
    {
        $user = User::findOrFail($request->id);
        return view('panel.users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'email' => 'string|',
            'password' => 'string|',
            'image' => 'mimes:jpg,jpeg,png|max:2048',
        ]);
        $user = User::findOrFail($request->all());
        $user->update();
        /////////////////////////////
        $file = $request->file('image');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $path = $file->move('panel/img/users', $fileName);
        $image = new ImageModel($request->all());
        Image::make($image->path = $path)->fit(50, 50);
        $user->images()->save($image);
        /////////////////////////////
        Alert::success('موفقیت آمیز بود!', 'کاربر با موفقیت ثبت شد!');
        /////////////////////////////
        return redirect()->route('users.index');
    }

    public function delete(Request $request)
    {
        $user = User::findOrFail($request->id);
        $user->delete();
        /////////////////////////////
        Alert::success('موفقیت آمیز بود!', 'کاربر با موفقیت حذف شد!');
        /////////////////////////////
        return redirect()->route('users.index');
    }

    public function access(Request $request)
    {
        $user = User::with('permissions')->firstOrFail($request->id);
        return view('panel.users.access', compact('user'));
    }

    public function doAccess(Request $request)
    {
    }
}
