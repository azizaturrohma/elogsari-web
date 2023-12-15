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
            "username" => "required|min:3|max:50",
            "email" => "required|email",
            "password" => "required|min:4|max:8",
            "gender" => "required|max:10"
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
            "gender" => $request->gender
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
            ]);
        }
    }

    public function login(Request $request)
    {
        $loginData = Validator::make($request->all(), [
            "email" => "required|email",
            "password" => "required|min:4",
        ]);

        if ($loginData->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'data' => $loginData->errors(),
            ]);
        }

        if (Auth::attempt(
            ['email' => $request->email, 'password' => $request->password]
        )) {
            $auth = Auth::user();
            $data['id'] = $auth->id;
            $data['username'] = $auth->username;
            $data['token'] = $auth->createToken('auth_token')->plainTextToken;

            return response()->json([
                'status' => true,
                'message' => 'Login berhasil',
                'data' => $data,
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Login gagal',
            ]);
        }
    }

    // public function logout()
    // {
    //     auth()->user()->tokens()->delete();
    //     return response([
    //         'Logout success'
    //     ], 200);
    // }
}
