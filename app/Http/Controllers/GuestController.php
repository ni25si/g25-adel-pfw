<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB Facade untuk Query Builder

class GuestController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->input('search');

        // Query Builder untuk mengambil data menu + kategori di halaman Guest
        $menus = DB::table('menus')
            ->leftJoin('kategori', 'menus.kategori_id', '=', 'kategori.id')
            ->select(
                'menus.*',
                'kategori.nama_kategori'
            )
            ->when($search, function ($query, $search) {
                // Nested Where untuk fitur pencarian Guest
                $query->where(function ($q) use ($search) {
                    $q->where('menus.nama_menu', 'like', '%' . $search . '%')
                      ->orWhere('kategori.nama_kategori', 'like', '%' . $search . '%');
                });
            })
            ->latest('menus.created_at')
            ->paginate(6);

        // Mengirimkan variabel $menus ke tampilan guest.dashboard
        return view('guest.dashboard', compact('menus'));
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