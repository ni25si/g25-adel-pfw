<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laperin - Data Kurir</title>
    <link rel="icon" type="image/png" href="{{ asset('assets-guest/img/laperin.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

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
  <!-- Dashboard -->
  <li class="nav-item mb-2">
    <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center p-2 rounded-3 text-white">
      <span class="sidebar-icon me-3 ms-1"><i class="fas fa-chart-pie fs-6" style="color: #9ca3af !important;"></i></span>
      <span class="sidebar-text fw-medium">Dashboard</span>
    </a>
  </li>

  <!-- Pelanggan -->
  <li class="nav-item mb-2">
    <a href="{{ route('pelanggan.index') }}" class="nav-link d-flex align-items-center p-2 rounded-3 text-white">
      <span class="sidebar-icon me-3 ms-1"><i class="fas fa-users fs-6" style="color: #9ca3af !important;"></i></span>
      <span class="sidebar-text fw-medium">Pelanggan</span>
    </a>
  </li>

  <!-- Data Menu -->
  <li class="nav-item mb-2">
    <a href="{{ route('menu.index') }}" class="nav-link d-flex align-items-center p-2 rounded-3 text-white">
      <span class="sidebar-icon me-3 ms-1"><i class="fas fa-book-open fs-6" style="color: #9ca3af !important;"></i></span>
      <span class="sidebar-text fw-medium">Data Menu</span>
    </a>
  </li>

  <!-- Data Kurir -->
  <li class="nav-item mb-2">
    <a href="{{ route('kurir.index') }}" class="nav-link d-flex align-items-center p-2 rounded-3 text-white">
      <span class="sidebar-icon me-3 ms-1"><i class="fas fa-motorcycle fs-6" style="color: #9ca3af !important;"></i></span>
      <span class="sidebar-text fw-medium">Data Kurir</span>
    </a>
  </li>
</ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="content flex-grow-1 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h4 text-white mb-0">Daftar Kurir Laperin</h2>
                <a href="{{ route('kurir.create') }}" class="btn btn-success text-white">
                    <i class="fas fa-plus me-1"></i> Tambah Kurir
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show text-dark fw-bold" role="alert">
                    <i class="fas fa-check-circle me-1"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="card bg-gray-800 text-white border-0 shadow">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-dark table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th class="px-3">No</th>
                                    <th class="px-3">Nama Kurir</th>
                                    <th class="px-3">Nomor HP</th>
                                    <th class="px-3">Plat Kendaraan</th>
                                    <th class="px-3">Status</th>
                                    <th class="text-center px-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($kurirs as $index => $item)
                                    <tr>
                                        <td class="px-3">{{ $index + 1 }}</td>
                                        <td class="fw-bold px-3">{{ $item->nama_kurir }}</td>
                                        <td class="px-3">{{ $item->nomor_hp }}</td>
                                        <td class="px-3"><span class="badge bg-secondary">{{ $item->plat_kendaraan }}</span></td>
                                        <td class="px-3">
                                            <span class="badge {{ $item->status == 'Aktif' ? 'bg-success' : 'bg-danger' }}">
                                                {{ $item->status }}
                                            </span>
                                        </td>
                                        <td class="text-center px-3">
                                            <div class="d-flex align-items-center justify-content-center gap-1">
                                                <a href="{{ route('kurir.edit', $item->id_kurir) }}" class="btn btn-warning text-white btn-sm px-3 py-1">
                                                    <i class="fas fa-edit me-1"></i> Edit
                                                </a>
                                                <form action="{{ route('kurir.destroy', $item->id_kurir) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kurir ini?')">
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
                                    <tr><td colspan="6" class="text-center py-4 text-muted">Belum ada data kurir pengantar.</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>
</html>