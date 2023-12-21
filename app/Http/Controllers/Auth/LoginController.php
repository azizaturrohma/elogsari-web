<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        try {
            $data = Validator::make($request->all(), [
                "email" => "required|email|string",
                "password" => "required|string|min:4|max:8",
            ])->validate();
        } catch (ValidationException $e) {
            return redirect('/login')
                ->withErrors($e->validator)
                ->withInput();
        }

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('error', 'Anda tidak terdaftar');
        }
    }


    function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }
}
