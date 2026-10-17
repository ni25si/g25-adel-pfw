<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laperin - Tambah Menu</title>
    <link rel="icon" type="image/png" href="{{ asset('assets-guest/img/laperin.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">

    <div class="container" style="max-width: 650px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-white mb-0 fw-bold">Tambah Menu Baru</h3>
            <a href="{{ route('menu.index') }}" class="btn btn-outline-warning"><i class="fas fa-arrow-left me-1"></i> Kembali</a>
        </div>

        <!-- Kartu Form Warna Gelap Theme Laperin -->
        <div class="card text-white border-0 shadow p-4" style="background-color: #262f3d !important; border-radius: 12px;">
            <form action="{{ route('menu.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Nama Menu</label>
                    <input type="text" name="nama_menu" class="form-control bg-dark text-white border-secondary @error('nama_menu') is-invalid @enderror" value="{{ old('nama_menu') }}" placeholder="Contoh: Ayam Geprek Sambal Korek">
                    @error('nama_menu')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Kategori</label>
                    <select name="kategori" class="form-select bg-dark text-white border-secondary @error('kategori') is-invalid @enderror">
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Makanan Utama" {{ old('kategori') == 'Makanan Utama' ? 'selected' : '' }}>Makanan Utama</option>
                        <option value="Minuman" {{ old('kategori') == 'Minuman' ? 'selected' : '' }}>Minuman</option>
                        <option value="Cemilan" {{ old('kategori') == 'Cemilan' ? 'selected' : '' }}>Cemilan</option>
                    </select>
                    @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label text-white fw-semibold">Harga (Rp)</label>
                        <input type="number" name="harga" class="form-control bg-dark text-white border-secondary @error('harga') is-invalid @enderror" value="{{ old('harga') }}" placeholder="15000">
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label text-white fw-semibold">Stok</label>
                        <input type="number" name="stok" class="form-control bg-dark text-white border-secondary @error('stok') is-invalid @enderror" value="{{ old('stok') }}" placeholder="50">
                        @error('stok')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control bg-dark text-white border-secondary @error('deskripsi') is-invalid @enderror" rows="3" placeholder="Pedas manis gurih...">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success text-white w-100 fw-bold py-2 mt-2">
                    <i class="fas fa-save me-1"></i> Simpan Menu
                </button>
            </form>
        </div>
    </div>

</body>
</html>