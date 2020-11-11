<?php

namespace App\Http\Controllers\Panel\User;

use App\Http\Models\UserLog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserLogController extends Controller
{
    public function index()
    {
        $userLogs = UserLog::paginate(10);
        return view('panel.users.users-logs.index', compact('userLogs'));
    }


    public function show(Request $request)
    {
        $userLogs = UserLog::findOrFail($request->id);
        return view('panel.user.users.logs.show', compact('userLogs'));
    }

    public function delete(Request $request)
    {
        $userLogs = UserLog::findOrFail($request->id);
        $userLogs->delete();
        Alert::success('موفقیت آمیز بود!', 'لاگ با موفقیت حذف شد!');
        return redirect()->route('panel.user.users-logs.index',compact('userLogs'));
    }

    public function archive(Request $request)
    {
        //
    }
}
