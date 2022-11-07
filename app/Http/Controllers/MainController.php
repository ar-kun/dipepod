<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home', [
            "active" => "Home",
        ]);
    }
    public function profile()
    {
        return view('profile', [
            "active" => "Profile"
        ]);
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }
}