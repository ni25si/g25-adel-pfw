{{-- start sidebar --}}
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="{{ asset('assets-admin/img/favicon/favicon-32x32.png') }}" height="30"
            alt="Volt Logo">
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-3 pt-3">

        <!-- Logo / Header Sidebar -->
        <!-- Logo Brand Laperin -->
        <div class="d-flex align-items-center justify-content-start pb-4">
            <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none">
                <!-- Gambar Logo Laperin menggantikan Ikon Garpu -->
                <img src="{{ asset('assets-admin/img/laperin.png') }}" alt="Laperin Logo"
                    style="width: 35px; height: 35px; object-fit: contain;" class="me-2">
                <span class="sidebar-text fw-bold fs-4 text-white">Laperin</span>
            </a>
        </div>

        <!-- Daftar Menu Sidebar -->
        <ul class="nav flex-column pt-2 pt-md-0">

            <!-- Menu Dashboard (Kotak Background Dark) -->
            <li class="nav-item mb-2 {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center p-2 rounded-3"
                    style="background-color: #262f3d !important; color: #ffffff !important; text-decoration: none;">
                    <span class="sidebar-icon me-3 ms-1 d-flex align-items-center">
                        <i class="fas fa-chart-pie fs-6" style="color: #9ca3af !important;"></i>
                    </span>
                    <span class="sidebar-text fw-medium" style="color: #ffffff !important;">Dashboard</span>
                </a>
            </li>

            <!-- Menu Pelanggan (Kotak Background Dark) -->
            <li class="nav-item mb-2 {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                <a href="/guest" class="nav-link d-flex align-items-center p-2 rounded-3"
                    style="background-color: #262f3d !important; color: #ffffff !important; text-decoration: none;">
                    <span class="sidebar-icon me-3 ms-1 d-flex align-items-center">
                        <i class="fas fa-users fs-6" style="color: #9ca3af !important;"></i>
                    </span>
                    <span class="sidebar-text fw-medium" style="color: #ffffff !important;">Pelanggan</span>
                </a>
            </li>
            <!-- Menu User (Kotak Background Dark) -->
            <li class="nav-item mb-2 {{ request()->routeIs('user.*') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link d-flex align-items-center p-2 rounded-3"
                    style="background-color: #262f3d !important; color: #ffffff !important; text-decoration: none;">
                    <span class="sidebar-icon me-3 ms-1 d-flex align-items-center">
                        <i class="fas fa-user fs-6" style="color: #9ca3af !important;"></i>
                    </span>
                    <span class="sidebar-text fw-medium" style="color: #ffffff !important;">User</span>
                </a>
            </li>
            <!-- Garis Pembatas Halus -->
            <li role="separator" class="dropdown-divider my-3"
                style="border-color: rgba(255, 255, 255, 0.1) !important;"></li>

            <!-- Menu Documentation + Badge v1.4 -->
            <li class="nav-item mb-2">
                <a href="#" class="nav-link d-flex align-items-center justify-content-between p-2 rounded-3"
                    style="color: #ffffff !important; text-decoration: none;">
                    <div class="d-flex align-items-center">
                        <span class="sidebar-icon me-3 ms-1 d-flex align-items-center">
                            <i class="fas fa-question-circle fs-6" style="color: #9ca3af !important;"></i>
                        </span>
                        <span class="sidebar-text fw-medium" style="color: #ffffff !important;">Documentation</span>
                    </div>
                    <span class="badge rounded-pill"
                        style="background-color: #f59e0b !important; color: #1f2937 !important; font-size: 11px; font-weight: 700; padding: 4px 8px;">v1.4</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="sidebar pe-4 pb-3">
    <nav class="navbar navbar-dark">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img src="{{ asset('assets-guest/img/laperin.png') }}" alt="Logo Laperin" style="height: 50px;" class="me-2">
            <h3 class="mb-0">Laperin</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle profile-photo" src="{{ asset('assets-admin/img/admin.png') }}" alt="Foto Admin Adelia">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 text-white">Adelia</h6>
                <span class="small-muted">Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ url('/admin') }}" class="nav-item nav-link {{ request()->is('admin') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ url('/admin/menu') }}" class="nav-item nav-link {{ request()->is('admin/menu*') ? 'active' : '' }}"><i class="fa fa-hamburger me-2"></i>Kelola Menu</a>
            <a href="{{ url('/admin/pesanan') }}" class="nav-item nav-link {{ request()->is('admin/pesanan*') ? 'active' : '' }}"><i class="fa fa-shopping-bag me-2"></i>Data Pesanan</a>
            <a href="{{ url('/admin/pelanggan') }}" class="nav-item nav-link {{ request()->is('admin/pelanggan*') ? 'active' : '' }}"><i class="fa fa-users me-2"></i>Data Pelanggan</a>
            <a href="{{ url('/admin/laporan') }}" class="nav-item nav-link {{ request()->is('admin/laporan*') ? 'active' : '' }}"><i class="fa fa-chart-bar me-2"></i>Laporan</a>
            <a href="{{ url('/admin/pengaturan') }}" class="nav-item nav-link {{ request()->is('admin/pengaturan*') ? 'active' : '' }}"><i class="fa fa-cog me-2"></i>Pengaturan</a>
        </div>
    </nav>
</div>
</nav>
{{-- end sidebar --}}
