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
</nav>
{{-- end sidebar --}}