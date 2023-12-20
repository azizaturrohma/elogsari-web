<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordController extends Controller
{
    public function update(Request $request)
    {
        $validateData = Validator::make($request->all(), [
            'old_password' => 'required|min:4|max:8',
            'new_password' => 'required|min:4|max:8',
            'confirm_password' => 'required|min:4|max:8',
        ]);

        if ($validateData->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'data' => $validateData->errors(),
            ]);
        }

        $user = Auth::user();

        $oldCheck = Hash::check($request->old_password, $user->password);

        if (!$oldCheck) {
            return response()->json([
                'status' => false,
                'message' => 'Password Anda salah',
            ]);
        }

        $confirmCheck = $request->new_password == $request->confirm_password;

        if (!$confirmCheck) {
            return response()->json([
                'status' => false,
                'message' => 'Konfirmasi password tidak sesuai',
            ]);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Password berhasil diubah',
        ]);
    }
}
