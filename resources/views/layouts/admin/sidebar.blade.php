{{-- start sidebar --}}
<div class="sidebar pe-4 pb-3">
    <nav class="navbar navbar-dark">
        <!-- Logo Laperin -->
        <a href="{{ url('/dashboard') }}" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img src="{{ asset('assets-guest/img/laperin.png') }}" alt="Logo Laperin" style="height: 40px;" class="me-2">
            <h3 class="mb-0 text-white fw-bold">Laperin</h3>
        </a>

        <!-- Profil Admin -->
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle profile-photo" src="{{ asset('assets-admin/img/admin.png') }}" alt="Foto Admin Adelia" style="width: 40px; height: 40px; object-fit: cover;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 text-white">Adelia</h6>
                <span class="small text-muted">Admin</span>
            </div>
        </div>

        <!-- Navigation Menu -->
        <div class="navbar-nav w-100">
            <a href="{{ url('/dashboard') }}" class="nav-item nav-link {{ request()->is('dashboard*') || request()->is('admin') ? 'active' : '' }}">
                <i class="fa fa-chart-pie me-2"></i>Dashboard
            </a>
            <a href="{{ url('/admin/pelanggan') }}" class="nav-item nav-link {{ request()->is('admin/pelanggan*') ? 'active' : '' }}">
                <i class="fa fa-users me-2"></i>Data Pelanggan
            </a>
            <a href="{{ route('kategori.index') }}" class="nav-item nav-link {{ request()->is('admin/kategori*') ? 'active' : '' }}">
                <i class="fa fa-tags me-2"></i>Data Kategori
            </a>
            <a href="{{ route('menu.index') }}" class="nav-item nav-link {{ request()->is('admin/menu*') ? 'active' : '' }}">
                <i class="fa fa-utensils me-2"></i>Data Menu
            </a>
        </div>
    </nav>
</div>
{{-- end sidebar --}}