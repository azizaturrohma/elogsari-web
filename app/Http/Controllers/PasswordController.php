<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required', 'min:8', 'confirm_password'],
        ]);

        $old_check = Hash::check($request->old_password, auth()->user()->password);

        if (!$old_check) {
            return back()->with('error', 'Password Anda tidak cocok');
        }

        $confirm_check = $request->new_password == $request->confirm_password;

        if (!$confirm_check) {
            return back()->with('error', 'Konfirmasi Password Anda tidak sesuai');
        }

        auth()->user()->password = Hash::make($request->new_password);
        auth()->user()->save();

        return redirect('/')->with('success', 'Password berhasil diubah');
    }
}
