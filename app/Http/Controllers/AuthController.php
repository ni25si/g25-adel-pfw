<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('guest.login');
    }

    public function register()
    {
        return view('guest.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Username dan password sama -> dashboard admin
        if ($request->username === $request->password) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('auth.index')
            ->with('error', 'Username atau password salah!')
            ->withInput($request->only('username'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Kuis: belum disimpan ke database, langsung arahkan ke halaman login
        return redirect()->route('auth.index')
            ->with('success', 'Registrasi berhasil, silakan login.');
    }
}
