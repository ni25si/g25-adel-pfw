<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori'  => 'required|string',
            'harga'     => 'required|numeric|min:0',
            'stok'      => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        Menu::create($request->all());

        return redirect()->route('menu.index')->with('success', 'Data Menu berhasil ditambahkan!');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'kategori'  => 'required|string',
            'harga'     => 'required|numeric|min:0',
            'stok'      => 'required|numeric|min:0',
            'deskripsi' => 'nullable|string',
        ]);

        $menu->update($request->all());

        return redirect()->route('menu.index')->with('success', 'Data Menu berhasil diperbarui!');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Data Menu berhasil dihapus!');
    }
}