<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function login(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email|string",
            "password" => "required|string",
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return view('admin.dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Email dan password tidak sesuai');
        }
    }
}
