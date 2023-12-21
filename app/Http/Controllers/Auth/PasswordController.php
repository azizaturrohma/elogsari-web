<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.auth.update-password');
    }

    public function update(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'old_password' => 'required|min:4|max:8',
                'new_password' => 'required|min:4|max:8',
                'confirm_password' => 'required|same:new_password',
            ]);

            $validator->validate();
        } catch (ValidationException $e) {
            return redirect('/update-password')
                ->withErrors($e->validator)
                ->withInput();
        }

        $user = auth()->user();

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'Password lama anda tidak sesuai');
        }

        if (Hash::check($request->new_password, $user->password)) {
            return back()->with('error', 'Password baru harus berbeda dengan password lama');
        }

        $newPasswordHash = Hash::make($request->new_password);

        $user->update(['password' => $newPasswordHash]);

        return redirect('/dashboard')->with('success', 'Password berhasil diubah');
    }
}
