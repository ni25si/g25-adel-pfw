<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laperin - Data Kategori</title>
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
        <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse min-vh-100"
            style="width: 250px;">
            <div class="sidebar-inner px-3 pt-3">
                <div class="d-flex align-items-center justify-content-start pb-4">
                    <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none">
                        <img src="{{ asset('assets-guest/img/laperin.png') }}" alt="Laperin Logo"
                            style="width: 35px; height: 35px; object-fit: contain;" class="me-2">
                        <span class="sidebar-text fw-bold fs-4 text-white">Laperin</span>
                    </a>
                </div>
                <ul class="nav flex-column pt-2 pt-md-0">
                    <li class="nav-item mb-2">
                        <a href="{{ route('dashboard') }}"
                            class="nav-link d-flex align-items-center p-2 rounded-3 text-white text-decoration-none"
                            style="background-color: #262f3d !important;">
                            <span class="sidebar-icon me-3 ms-1"><i class="fas fa-chart-pie fs-6"
                                    style="color: #9ca3af !important;"></i></span>
                            <span class="sidebar-text fw-medium">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('pelanggan.index') }}"
                            class="nav-link d-flex align-items-center p-2 rounded-3 text-white text-decoration-none"
                            style="background-color: #262f3d !important;">
                            <span class="sidebar-icon me-3 ms-1"><i class="fas fa-users fs-6"
                                    style="color: #9ca3af !important;"></i></span>
                            <span class="sidebar-text fw-medium">Pelanggan</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('kategori.index') }}"
                            class="nav-link d-flex align-items-center p-2 rounded-3 text-white text-decoration-none"
                            style="background-color: #262f3d !important;">
                            <span class="sidebar-icon me-3 ms-1"><i class="fas fa-tags fs-6"
                                    style="color: #9ca3af !important;"></i></span>
                            <span class="sidebar-text fw-medium">Data Kategori</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="{{ route('menu.index') }}"
                            class="nav-link d-flex align-items-center p-2 rounded-3 text-white text-decoration-none"
                            style="background-color: #262f3d !important;">
                            <span class="sidebar-icon me-3 ms-1"><i class="fas fa-book-open fs-6"
                                    style="color: #9ca3af !important;"></i></span>
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
                <h2 class="h4 text-white mb-0">Daftar Kategori</h2>
                <a href="{{ route('kategori.create') }}" class="btn btn-success text-white">
                    <i class="fas fa-plus me-1"></i> Tambah Kategori
                </a>
            </div>

            <!-- Flash Message Sukses -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show text-dark fw-bold" role="alert">
                    <i class="fas fa-check-circle me-1"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Form Pencarian -->
            <form action="{{ route('kategori.index') }}" method="GET" class="mb-4 col-md-6">
                <div class="input-group">
                    <input type="text" name="search" class="form-control bg-dark text-white border-secondary"
                        placeholder="Cari kategori..." value="{{ request('search') }}">
                    <button class="btn btn-outline-light" type="submit">
                        <i class="fas fa-search me-1"></i> Cari
                    </button>
                </div>
            </form>

            <!-- Tabel Data Kategori -->
            <div class="card bg-gray-800 text-white border-0 shadow">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="px-3">No</th>
                                    <th class="px-3">Nama Kategori</th>
                                    <th class="px-3 text-nowrap">Total Menu Terkait</th>
                                    <th class="text-center px-3 text-nowrap">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($categories as $index => $item)
                                    <tr>
                                        <td class="px-3">{{ $categories->firstItem() + $index }}</td>
                                        <td class="fw-bold px-3 text-nowrap">{{ $item->nama_kategori }}</td>
                                        <td class="px-3 text-nowrap">
                                            <span class="badge bg-info text-dark">{{ $item->total_menu }} Menu</span>
                                        </td>
                                        <td class="text-center px-3 text-nowrap">
                                            <div class="d-flex align-items-center justify-content-center gap-1">
                                                <button class="btn btn-warning text-white btn-sm px-3 py-1"
                                                    data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}">
                                                    <i class="fas fa-edit me-1"></i> Edit
                                                </button>

                                                <form action="{{ route('kategori.destroy', $item->id) }}" method="POST"
                                                    class="d-inline"
                                                    onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-danger text-white btn-sm px-3 py-1">
                                                        <i class="fas fa-trash-alt me-1"></i> Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal Edit Kategori -->
                                    <div class="modal fade text-dark" id="editModal{{ $item->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content bg-dark text-white border-secondary">
                                                <form action="{{ route('kategori.update', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-header border-secondary">
                                                        <h5 class="modal-title">Edit Kategori</h5>
                                                        <button type="button" class="btn-close btn-close-white"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama Kategori</label>
                                                            <input type="text" name="nama_kategori"
                                                                class="form-control bg-dark text-white border-secondary"
                                                                value="{{ $item->nama_kategori }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer border-secondary">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Simpan
                                                            Perubahan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4 text-muted">Belum ada data kategori menu.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-3">
                {{ $categories->links() }}
            </div>
        </main>
    </div>

    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="modalTambahKategori" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white border-secondary">
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <div class="modal-header border-secondary">
                        <h5 class="modal-title">Tambah Kategori Baru</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" name="nama_kategori"
                                class="form-control bg-dark text-white border-secondary"
                                placeholder="Contoh: Makanan Utama, Minuman" required>
                        </div>
                    </div>
                    <div class="modal-footer border-secondary">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success text-white">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.css"></script>
</body>

</html>