<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('front_end.home');
    }

    public function signup()
    {
        return view('front_end.register');
    }
}
