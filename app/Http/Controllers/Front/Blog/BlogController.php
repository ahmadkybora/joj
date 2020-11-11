<?php

namespace App\Http\Controllers\Front\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home()
    {
        return view('front.blog.home');
    }
}
