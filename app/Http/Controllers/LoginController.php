<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view("admin.login");
    }

    function login(Request $request)
    {
        $this->validate($request, [
            "email" => "required|email|string",
            "password" => "required|string",
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login.index')->with('error', 'Email dan password tidak sesuai');
        }
    }
}
