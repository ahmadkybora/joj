<?php

namespace App\Http\Controllers\Panel\Error;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function error_401()
    {
        return view('panel.errors.401');
    }

    public function error_403()
    {
        return view('panel.errors.403');
    }

    public function error_404()
    {
        return view('panel.errors.404');
    }
}
