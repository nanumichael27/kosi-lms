<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

    public function favourites()
    {
        return view('dashboard.favourites');
    }

    public function courses()
    {
        return view('dashboard.mycourses');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

}
