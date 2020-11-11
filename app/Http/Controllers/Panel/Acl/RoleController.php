<?php

namespace App\Http\Controllers\Panel\Acl;

use App\Http\Controllers\Controller;
use App\Http\Models\Permission;
use App\Http\Models\Role;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::paginate(10);
        return view('panel.acl.roles.index', compact('roles'));
    }

    public function insert()
    {
        return view('panel.acl.roles.insert');
    }

    public function store(RoleRequest $request)
    {
        $role = new Role();
        $role->user_id = 1;
        $role->roleName = $request['roleName'];
        $role->roleCreator = 'ahmad';
        $role->description = $request['description'];
        $role->save();

        $permissions = $request->input('permissionName');

        foreach ($permissions as $permission) {
            $permissionName = Permission::where('permissionName', '=', $permission)->firstOrFail();
            $role->permissions()->attach($permissionName);
        }

//        if (session('success_message')) {
//            Alert::success('موفقیت آمیز بود!', session('success_message'));
//        }

        Alert::success('موفقیت آمیز بود!', 'نقش با موفقیت ثبت شد!');

        return redirect()->route('roles.index');
    }

    public function show(Request $request)
    {
        $role = Role::with('permissions')->findOrFail($request->id);
        if (is_null($role)) {
            return redirect()->route('error.404');
        }
//        $roleId = Role::with('permissions')->pluck('id');
        return view('panel.acl.roles.show', compact('role'));
    }

    public function edit(Request $request)
    {
        $role = Role::with('permissions')->find($request->id);
        if (is_null($role)) {
            return redirect()->route('error.404');
        }
        return view('panel.acl.roles.edit', compact('role'));
    }

    public function update(Request $request)
    {
        $role=Role::with('permissions')->find($request->id);
        if(is_null($role)){
            return redirect()->route('error.404');
        }

        $request->validate([
            'roleName'=>'string|max:25',
            'description'=>'string|max:2500',
        ]);

        $role->roleName=$request['roleName'];
        $role->roleCreator="ahmad";
        $role->description=$request['description'];
        $role->save();

        $permissions=$request->input('permissionName');

        $permissionIds = Permission::whereIn('permissionName', $permissions)->pluck('id');
        $role->permissions()->sync($permissionIds);

        return redirect()->route('roles.index');
    }

    public function delete(Request $request)
    {
        $role = Role::findOrFail($request->id);
        $role->delete();
        Alert::success('موفقیت آمیز بود!', 'نقش با موفقیت حذف شد!');
        return redirect()->route('roles.index');
    }

//    public function archive(Request $request){
//        $role=Role::findOrFail($request->id);
//        Alert::success('موفقیت آمیز بود!', 'نقش با موفقیت حذف شد!');
//        return redirect()->route('roles.index');
//    }
}
