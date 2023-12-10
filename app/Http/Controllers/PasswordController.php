<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.update-password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);

        $old_check = Hash::check($request->old_password, auth()->user()->password);

        if (!$old_check) {
            return back()->with('error', 'Password Anda tidak cocok');
        }

        $confirm_check = $request->new_password == $request->confirm_password;

        if (!$confirm_check) {
            return back()->with('error', 'Konfirmasi Password Anda tidak sesuai');
        }

        $newPasswordHash = Hash::make($request->new_password);

        // Update the password in the database
        User::where('id', Auth::user()->id)->update(['password' => $newPasswordHash]);

        return redirect('/dashboard')->with('success', 'Password berhasil diubah');
    }
}
