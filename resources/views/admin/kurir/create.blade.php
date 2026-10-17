<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laperin - Tambah Kurir</title>
    <link rel="icon" type="image/png" href="{{ asset('assets-guest/img/laperin.png') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">

    <div class="container" style="max-width: 600px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-white mb-0 fw-bold">Tambah Kurir Baru</h3>
            <a href="{{ route('kurir.index') }}" class="btn btn-outline-warning"><i class="fas fa-arrow-left me-1"></i> Kembali</a>
        </div>

        <div class="card text-white border-0 shadow p-4" style="background-color: #262f3d !important; border-radius: 12px;">
            <form action="{{ route('kurir.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Nama Kurir</label>
                    <input type="text" name="nama_kurir" class="form-control bg-dark text-white border-secondary @error('nama_kurir') is-invalid @enderror" value="{{ old('nama_kurir') }}" placeholder="Budi Santoso">
                    @error('nama_kurir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Nomor HP</label>
                    <input type="text" name="nomor_hp" class="form-control bg-dark text-white border-secondary @error('nomor_hp') is-invalid @enderror" value="{{ old('nomor_hp') }}" placeholder="081234567890">
                    @error('nomor_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Plat Kendaraan</label>
                    <input type="text" name="plat_kendaraan" class="form-control bg-dark text-white border-secondary @error('plat_kendaraan') is-invalid @enderror" value="{{ old('plat_kendaraan') }}" placeholder="B 1234 ABC">
                    @error('plat_kendaraan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Status</label>
                    <select name="status" class="form-select bg-dark text-white border-secondary @error('status') is-invalid @enderror">
                        <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="Nonaktif" {{ old('status') == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                    @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-success text-white w-100 fw-bold py-2 mt-2">
                    <i class="fas fa-save me-1"></i> Simpan Kurir
                </button>
            </form>
        </div>
    </div>

</body>
</html>