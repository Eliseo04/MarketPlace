<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpcenterController extends Controller
{
    public function helpcenter()
    {
        return view('konten.helpcenter');
    }
}
