<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function ShowLoginForm() {
        return view('layouts.auth.login');
    }
}
