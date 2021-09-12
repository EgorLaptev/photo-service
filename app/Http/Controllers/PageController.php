<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home(Request $request)
    {
        return view('pages.home');
    }

    public function login(Request $request)
    {
        return view('pages.login');
    }

    public function register(Request $request)
    {
        return view('pages.register');
    }


}
