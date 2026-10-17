<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laperin - Data Menu</title>
    <link rel="icon" type="image/png" href="{{ asset('assets-guest/img/laperin.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

    <!-- Sidebar & Topbar Container -->
    <div class="d-flex">
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse min-vh-100" style="width: 250px;">
            <div class="sidebar-inner px-3 pt-3">
                <div class="d-flex align-items-center justify-content-start pb-4">
                    <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none">
                        <img src="{{ asset('assets-guest/img/laperin.png') }}" alt="Laperin Logo" style="width: 35px; height: 35px; object-fit: contain;" class="me-2">
                        <span class="sidebar-text fw-bold fs-4 text-white">Laperin</span>
                    </a>
                </div>
                <ul class="nav flex-column pt-2 pt-md-0">
                    <li class="nav-item mb-2">
                        <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center p-2 rounded-3 text-white text-decoration-none" style="background-color: #262f3d !important;">
                            <span class="sidebar-icon me-3 ms-1"><i class="fas fa-chart-pie fs-6" style="color: #9ca3af !important;"></i></span>
                            <span class="sidebar-text fw-medium">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('pelanggan.index') }}" class="nav-link d-flex align-items-center p-2 rounded-3 text-white text-decoration-none" style="background-color: #262f3d !important;">
                            <span class="sidebar-icon me-3 ms-1"><i class="fas fa-users fs-6" style="color: #9ca3af !important;"></i></span>
                            <span class="sidebar-text fw-medium">Pelanggan</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('menu.index') }}" class="nav-link d-flex align-items-center p-2 rounded-3 text-white text-decoration-none" style="background-color: #262f3d !important;">
                            <span class="sidebar-icon me-3 ms-1"><i class="fas fa-book-open fs-6" style="color: #9ca3af !important;"></i></span>
                            <span class="sidebar-text fw-medium">Data Menu</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="content flex-grow-1 p-4">
            <!-- Header Topbar -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h4 text-white mb-0">Daftar Menu</h2>
                <a href="{{ route('menu.create') }}" class="btn btn-success text-white">
                    <i class="fas fa-plus me-1"></i> Tambah Menu
                </a>
            </div>

            <!-- Flash Message Sukses -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show text-dark fw-bold" role="alert">
                    <i class="fas fa-check-circle me-1"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Tabel Data Menu -->
            <div class="card bg-gray-800 text-white border-0 shadow">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover align-middle mb-0">
    <thead>
        <tr>
            <th class="px-3">No</th>
            <th class="px-3">Nama Menu</th>
            <th class="px-3">Kategori</th>
            <th class="px-3 text-nowrap">Harga</th>
            <th class="px-3 text-nowrap">Stok</th>
            <th class="px-3">Deskripsi</th>
            <th class="text-center px-3 text-nowrap">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($menus as $index => $item)
            <tr>
                <td class="px-3">{{ $index + 1 }}</td>
                <td class="fw-bold px-3 text-nowrap">{{ $item->nama_menu }}</td>
                <td class="px-3 text-nowrap"><span class="badge bg-info text-dark">{{ $item->kategori }}</span></td>
                <td class="px-3 text-nowrap fw-bold text-success">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td class="px-3 text-nowrap">{{ $item->stok }} pcs</td>
                <td class="px-3">{{ $item->deskripsi ?? '-' }}</td>
                <td class="text-center px-3 text-nowrap">
                    <div class="d-flex align-items-center justify-content-center gap-1">
                        <a href="{{ route('menu.edit', $item->id_menu) }}" class="btn btn-warning text-white btn-sm px-3 py-1">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                        <form action="{{ route('menu.destroy', $item->id_menu) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-white btn-sm px-3 py-1">
                                <i class="fas fa-trash-alt me-1"></i> Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center py-4 text-muted">Belum ada data menu kuliner.</td>
            </tr>
        @endforelse
    </tbody>
</table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('assets-admin/js/bootstrap.bundle.min.css') }}"></script>
</body>
</html>