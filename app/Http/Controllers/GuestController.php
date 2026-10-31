<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Jika tampilan utama restoran kamu ada di dashboard.blade.php, gunakan 'guest.dashboard'.
    // Jika ada di home.blade.php, gunakan 'guest.home'.
    public function home()
    {
        return view('guest.dashboard'); 
    }

    public function loginForm()
    {
        return view('guest.login');
    }

    public function loginProcess(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username && $password && $username === $password) {
            return redirect()->route('admin.dashboard')->with('success', 'Berhasil Login!');
        }

        return redirect()->back()->with('error', 'Username dan Password tidak cocok!');
    }

    public function registerForm()
    {
        return view('guest.register');
    }
}