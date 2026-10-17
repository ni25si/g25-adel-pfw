<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laperin - Edit Kurir</title>
    <link rel="icon" type="image/png" href="{{ asset('assets-guest/img/laperin.png') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white p-4">

    <div class="container" style="max-width: 600px;">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-white mb-0 fw-bold">Edit Data Kurir</h3>
            <a href="{{ route('kurir.index') }}" class="btn btn-outline-warning"><i class="fas fa-arrow-left me-1"></i> Kembali</a>
        </div>

        <div class="card text-white border-0 shadow p-4" style="background-color: #262f3d !important; border-radius: 12px;">
            <form action="{{ route('kurir.update', $kurir->id_kurir) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Nama Kurir</label>
                    <input type="text" name="nama_kurir" class="form-control bg-dark text-white border-secondary @error('nama_kurir') is-invalid @enderror" value="{{ old('nama_kurir', $kurir->nama_kurir) }}">
                    @error('nama_kurir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Nomor HP</label>
                    <input type="text" name="nomor_hp" class="form-control bg-dark text-white border-secondary @error('nomor_hp') is-invalid @enderror" value="{{ old('nomor_hp', $kurir->nomor_hp) }}">
                    @error('nomor_hp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Plat Kendaraan</label>
                    <input type="text" name="plat_kendaraan" class="form-control bg-dark text-white border-secondary @error('plat_kendaraan') is-invalid @enderror" value="{{ old('plat_kendaraan', $kurir->plat_kendaraan) }}">
                    @error('plat_kendaraan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label text-white fw-semibold">Status</label>
                    <select name="status" class="form-select bg-dark text-white border-secondary @error('status') is-invalid @enderror">
                        <option value="Aktif" {{ old('status', $kurir->status) == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="Nonaktif" {{ old('status', $kurir->status) == 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                    @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary text-white w-100 fw-bold py-2 mt-2">
                    <i class="fas fa-sync-alt me-1"></i> Perbarui Kurir
                </button>
            </form>
        </div>
    </div>

</body>
</html>