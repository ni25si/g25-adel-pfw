<!--

=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laperin</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets-guest/img/laperin.png') }}">

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{ asset('assets-admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets-admin/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">
    <!-- Fix Ukuran Ikon Raksasa -->
    <style>
        svg {
            max-width: 24px !important;
            max-height: 24px !important;
        }

        table,
        table td,
        table th {
            color: #212529 !important;
        }

        /* Mencegah teks hilang/gelap saat baris tabel di-hover */
        .table-hover tbody tr:hover,
        .table-hover tbody tr:hover td {
            color: #212529 !important;
            background-color: #f1f5f9 !important;
        }
    </style>
</head>

<body>
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
                <li class="nav-item mb-2">
                    <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center p-2 rounded-3"
                        style="background-color: #262f3d !important; color: #ffffff !important; text-decoration: none;">
                        <span class="sidebar-icon me-3 ms-1 d-flex align-items-center">
                            <i class="fas fa-chart-pie fs-6" style="color: #9ca3af !important;"></i>
                        </span>
                        <span class="sidebar-text fw-medium" style="color: #ffffff !important;">Dashboard</span>
                    </a>
                </li>

                <!-- Menu Pelanggan (Kotak Background Dark) -->
                <li class="nav-item mb-2">
                    <a href="/guest" class="nav-link d-flex align-items-center p-2 rounded-3"
                        style="background-color: #262f3d !important; color: #ffffff !important; text-decoration: none;">
                        <span class="sidebar-icon me-3 ms-1 d-flex align-items-center">
                            <i class="fas fa-users fs-6" style="color: #9ca3af !important;"></i>
                        </span>
                        <span class="sidebar-text fw-medium" style="color: #ffffff !important;">Pelanggan</span>
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

    <main class="content">

        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <!-- Search form -->
                        <form class="navbar-search form-inline" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar">
                                <span class="input-group-text" id="topbar-addon">
                                    <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search"
                                    aria-label="Search" aria-describedby="topbar-addon">
                            </div>
                        </form>
                        <!-- / Search form -->
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center flex-row">
                        <!-- 1. LONCENG NOTIFIKASI PUTIH -->
                        <li class="nav-item me-3">
                            <a class="nav-link p-0 text-white position-relative d-flex align-items-center" href="#">
                                <svg class="icon icon-sm text-white" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;">
                                    <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                    </path>
                                </svg>
                                <span class="position-absolute bg-danger rounded-circle"
                                    style="width: 8px; height: 8px; top: 0; right: 0;"></span>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link pt-1 px-0 d-flex align-items-center text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <img class="avatar rounded-circle bg-white p-1 me-2"
                                        src="{{ asset('assets-guest/img/laperin.png') }}" width="30" height="30"
                                        alt="Laperin Logo">
                                    <span class="mb-0 font-small fw-bold text-white">Laperin</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                <a class="dropdown-item d-flex align-items-center" href="#">My Profile</a>
                                <a class="dropdown-item d-flex align-items-center" href="#">Settings</a>
                                <div role="separator" class="dropdown-divider my-1 border-gray-100"></div>
                                <a class="dropdown-item d-flex align-items-center text-danger" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Pelanggan</a></li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between w-100 flex-wrap">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4">Data Pelanggan</h1>
                    <p class="mb-0">List data seluruh pelanggan</p>
                </div>
                <div>
                    <a href="{{ route('pelanggan.create') }}" class="btn btn-success text-white">Tambah Pelanggan</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card border-0 shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card card-body border-0 shadow table-wrapper table-responsive">
                                <table class="table table-hover align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="border-gray-200">First Name</th>
                                            <th class="border-gray-200">Last Name</th>
                                            <th class="border-gray-200">Birthday</th>
                                            <th class="border-gray-200">Gender</th>
                                            <th class="border-gray-200">Email</th>
                                            <th class="border-gray-200">Phone</th>
                                            <th class="border-gray-200">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($dataPelanggan as $item)
                                            <tr>
                                                <td>{{ $item->first_name }}</td>
                                                <td>{{ $item->last_name }}</td>
                                                <td>{{ $item->birthday }}</td>
                                                <td>{{ $item->gender }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td class="text-center align-middle">
                                                    <div class="d-flex align-items-center justify-content-center gap-1">
                                                        <!-- Tombol Edit Biru -->
                                                        <a href="{{ route('pelanggan.edit', $item->pelanggan_id ?? (method_exists($item, 'getKey') ? $item->getKey() : $item->id)) }}"
                                                            class="btn btn-primary text-white d-inline-flex align-items-center px-3 py-2 fs-6">
                                                            <i class="fas fa-edit me-1"></i> Edit
                                                        </a>

                                                        <!-- Tombol Hapus Merah -->
                                                        <form
                                                            action="{{ route('pelanggan.destroy', $item->pelanggan_id ?? (method_exists($item, 'getKey') ? $item->getKey() : $item->id)) }}"
                                                            method="POST" class="d-inline"
                                                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-danger text-white d-inline-flex align-items-center px-3 py-2 fs-6">
                                                                <i class="fas fa-trash-alt me-1"></i> Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a
                            class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a>
                    </p>
                </div>
                <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                    <!-- List -->
                    <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/about">About</a>
                        </li>
                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/themes">Themes</a>
                        </li>
                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/blog">Blog</a>
                        </li>
                        <li class="list-inline-item px-0 px-sm-2">
                            <a href="https://themesberg.com/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </main>

    <!-- Core -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Volt JS -->
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>
</body>

</html>