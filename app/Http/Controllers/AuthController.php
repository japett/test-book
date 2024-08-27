<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:225',
            'no_telp' => 'required|string|max:14',
            'alamat' => 'required|string|max:255',
        ]);

        $member_id = 'M-' . uniqid();

        user::create([
            'nama_lengkap' => $request->nama_lengkap,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'member_id' => $member_id,
        ]);

        return redirect()->route('login')->with('succes', 'Registration succesful. Your Member ID is: ' . $member_id);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string |max:225',
            'member_id' => 'required|string|max:225',
        ]);

        $user = User::where('nama_lengkap', $request->nama_lengkap)
        ->where('member_id', $request->member_id)
        ->first();

        if ($user) {
            return redirect()->route('home')->with('succes', 'Login successful.');
        }

        return back()->withErrors([
            'error' => 'Invalid crendetials.',
        ]);
    }
}
