<?php

namespace App\Http\Controllers\Panel\Comment;

use App\Http\Controllers\Controller;
use App\Http\Models\Comment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{

    public function index()
    {
        $comments=Comment::paginate(10);
        return view('panel.users.comments.index',compact('comments'));
    }

    public function show(Request $request)
    {
        $comments=Comment::findOrfail($request->id);
        return view('panel.users.comments.insert',compact('comments'));
    }

    public function delete(Request $request)
    {
        $comment=Comment::findOrfail($request->id);
        $comment->delete();
        Alert::success('موفقیت آمیز بود!', 'نظر با موفقیت حذف شد!');

        return redirect()->route('panel.users.comments.index');
    }

    public function archive(Request $request)
    {
        //
    }
}
