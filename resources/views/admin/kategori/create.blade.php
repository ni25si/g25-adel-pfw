@extends('layouts.admin.app')

@section('content')
<div class="container" style="max-width: 700px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="text-white mb-0 fw-bold">Tambah Kategori Baru</h3>
            <p class="text-muted small mb-0">Masukkan kategori makanan/minuman untuk Laperin</p>
        </div>
        <a href="{{ route('kategori.index') }}" class="btn btn-outline-warning"><i class="fas fa-arrow-left me-1"></i> Kembali</a>
    </div>

    <div class="card text-white border-0 shadow p-4" style="background-color: #262f3d !important; border-radius: 12px;">
        <form action="{{ route('kategori.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label text-white fw-semibold">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control bg-dark text-white border-secondary @error('nama_kategori') is-invalid @enderror" value="{{ old('nama_kategori') }}" placeholder="Contoh: Makanan Utama, Minuman, Cemilan..." required>
                @error('nama_kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success text-white w-100 fw-bold py-2 mt-3">
                <i class="fas fa-save me-1"></i> Simpan Kategori
            </button>
        </form>
    </div>
</div>
@endsection