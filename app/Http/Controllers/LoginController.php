<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Log()
    {
        return view('Relog.Login');
    }
}
