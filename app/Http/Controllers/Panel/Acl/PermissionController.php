<?php

namespace App\Http\Controllers\Panel\Acl;

use App\Http\Controllers\Controller;
use App\Http\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function index()
    {
        $permissions=Permission::paginate(10);
        return view('panel.acl.permissions.index',compact('permissions'));
    }

    public function show(Request $request)
    {
        $permissions=Permission::findOrFail($request->id);
        return view('panel.acl.permissions.show',compact('permissions'));
    }

    public function delete(Request $request)
    {
        //
    }

    public function archive(Request $request){}
}
