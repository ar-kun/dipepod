<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function wisata()
    {
        return view('wisata', [
            "active" => "Wisata"
        ]);
    }
}