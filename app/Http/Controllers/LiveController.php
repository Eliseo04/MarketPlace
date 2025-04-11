<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function livestream()
    {
        return view('konten.live');
    }
}
