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
            "password" => "required|string|min:8",
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login.index')->with('error', 'Email dan password tidak sesuai');
        }
    }
}
