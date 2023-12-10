<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $validateData = Validator::make($request->all(), [
            "username" => "required",
            "email" => "required|email",
            "password" => "required",
        ]);

        if ($validateData->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'data' => $validateData->errors(),
            ]);
        }

        $user = new User([
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);

        if ($user->save()) {
            return response()->json([
                'status' => true,
                'message' => 'Insert ke database berhasil',
                'data' => $user,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Insert ke database gagal',
                'data' => $user,
            ]);
        }
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            "email" => "required|email",
            "password" => "required",
        ]);

        if (Auth::attempt(
            ['email' => $request->email, 'password' => $request->password]
        )) {
            $auth = Auth::user();
            $data['username'] = $auth->username;
            $data['token'] = $auth->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => true,
                'message' => 'Login berhasil',
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Login gagal',
            ]);
        }
    }
}
