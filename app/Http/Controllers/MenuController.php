<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('kategori')->latest()->paginate(10);
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        $categories = Kategori::all();
        return view('admin.menu.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_menu'   => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategori,id',
            'harga'       => 'required|numeric|min:0',
            'stok'        => 'required|numeric|min:0',
            'deskripsi'   => 'nullable|string',
        ]);

        Menu::create($request->all());

        return redirect()->route('menu.index')->with('success', 'Data Menu berhasil ditambahkan!');
    }

    public function edit(Menu $menu)
    {
        $categories = Kategori::all();
        return view('admin.menu.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nama_menu'   => 'required|string|max:255',
            'kategori_id' => 'required|exists:kategori,id',
            'harga'       => 'required|numeric|min:0',
            'stok'        => 'required|numeric|min:0',
            'deskripsi'   => 'nullable|string',
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