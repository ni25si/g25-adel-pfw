<?php

namespace App\Http\Controllers;

use App\Models\Kurir;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function index()
    {
        $kurirs = Kurir::latest()->get();
        return view('admin.kurir.index', compact('kurirs'));
    }

    public function create()
    {
        return view('admin.kurir.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kurir'     => 'required|string|max:255',
            'nomor_hp'       => 'required|string|max:20',
            'plat_kendaraan' => 'required|string|max:20',
            'status'         => 'required|in:Aktif,Nonaktif',
        ]);

        Kurir::create($request->all());

        return redirect()->route('kurir.index')->with('success', 'Data Kurir berhasil ditambahkan!');
    }

    public function edit(Kurir $kurir)
    {
        return view('admin.kurir.edit', compact('kurir'));
    }

    public function update(Request $request, Kurir $kurir)
    {
        $request->validate([
            'nama_kurir'     => 'required|string|max:255',
            'nomor_hp'       => 'required|string|max:20',
            'plat_kendaraan' => 'required|string|max:20',
            'status'         => 'required|in:Aktif,Nonaktif',
        ]);

        $kurir->update($request->all());

        return redirect()->route('kurir.index')->with('success', 'Data Kurir berhasil diperbarui!');
    }

    public function destroy(Kurir $kurir)
    {
        $kurir->delete();
        return redirect()->route('kurir.index')->with('success', 'Data Kurir berhasil dihapus!');
    }
}