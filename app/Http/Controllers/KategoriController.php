<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $kategori = DB::table('kategori')
            ->leftJoin('menus', 'kategori.id', '=', 'menus.kategori_id')
            ->select('kategori.*', DB::raw('COUNT(menus.id_menu) as total_menu'))
            ->when($search, function ($query, $search) {
                return $query->where('kategori.nama_kategori', 'like', "%{$search}%");
            })
            ->groupBy('kategori.id', 'kategori.nama_kategori', 'kategori.created_at', 'kategori.updated_at')
            ->paginate(10);

        $categories = $kategori;

        return view('admin.kategori.index', compact('kategori', 'categories'));
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        DB::table('kategori')->insert([
            'nama_kategori' => $request->nama_kategori,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kategori = DB::table('kategori')->where('id', $id)->first();
        return view('admin.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        DB::table('kategori')->where('id', $id)->update([
            'nama_kategori' => $request->nama_kategori,
            'updated_at' => now(),
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui!');
    }

    public function destroy($id)
    {
        DB::table('kategori')->where('id', $id)->delete();
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus!');
    }
}