<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class registrationController extends Controller
{
    public function ShowRegistrationForm() {
        return view('layouts.auth.registration');
    }

    public function registrationUser(Request $request) {
        $validated = $request->validate([
            'name' => 'required|min:5|max:255',
            'no_hp' => 'required|min:11|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5'
        ]);

        User::create([
            'name' => $request['name'],
            'no_hp' => $request['no_hp'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('/signin')->with('message', 'Daftar berhasil, silahkan login!');
    }
}
