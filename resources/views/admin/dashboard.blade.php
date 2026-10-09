<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laperin</title>

    <link rel="icon" href="{{ asset('assets-guest/img/laperin.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-admin/css/style.css') }}" rel="stylesheet">


</head>
<body>
<div class="container-fluid position-relative d-flex p-0">
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="z-index:9999;">
        <div class="spinner-border" style="width:3rem;height:3rem;color:var(--laperin-orange)" role="status">
            <span class="visually-hidden">Memuat...</span>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar navbar-dark">
            <a href="{{ url('/admin') }}" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
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
                <a href="{{ url('/admin') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="{{ url('/admin/menu') }}" class="nav-item nav-link"><i class="fa fa-hamburger me-2"></i>Kelola Menu</a>
                <a href="{{ url('/admin/pesanan') }}" class="nav-item nav-link"><i class="fa fa-shopping-bag me-2"></i>Data Pesanan</a>
                <a href="{{ url('/admin/pelanggan') }}" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Data Pelanggan</a>
                <a href="{{ url('/admin/laporan') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Laporan</a>
                <a href="{{ url('/admin/pengaturan') }}" class="nav-item nav-link"><i class="fa fa-cog me-2"></i>Pengaturan</a>
            </div>
        </nav>
    </div>

    <!-- Konten utama -->
    <div class="content">
        <nav class="navbar navbar-expand navbar-dark sticky-top px-4 py-0">
            <a href="{{ url('/admin') }}" class="navbar-brand d-flex d-lg-none me-3"><h4 class="mb-0"><i class="fas fa-utensils"></i></h4></a>
            <a href="#" class="sidebar-toggler flex-shrink-0" aria-label="Buka/tutup menu"><i class="fa fa-bars"></i></a>
            <form class="d-none d-md-flex ms-4" role="search" onsubmit="return false;">
                <input id="search-dashboard" class="form-control border-0" type="search" placeholder="Cari data...">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-envelope me-lg-2"></i><span class="d-none d-lg-inline-flex">Pesan</span></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 rounded-bottom m-0">
                        <span class="dropdown-item-text small-muted">Belum ada pesan baru.</span>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-bell me-lg-2"></i><span class="d-none d-lg-inline-flex">Notifikasi</span></a>
                    <div class="dropdown-menu dropdown-menu-end border-0 rounded-bottom m-0">
                        <span class="dropdown-item-text small-muted">Belum ada notifikasi baru.</span>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2 profile-photo" src="{{ asset('assets-admin/img/admin.png') }}" alt="Foto Admin Adelia">
                        <span class="d-none d-lg-inline-flex">Adelia</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end border-0 rounded-bottom m-0">
                        <a href="{{ url('/admin/profil') }}" class="dropdown-item">Profil Saya</a>
                        <a href="{{ url('/admin/pengaturan') }}" class="dropdown-item">Pengaturan</a>
                        <a href="{{ url('/logout') }}" class="dropdown-item">Keluar</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid pt-4 px-4">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <div>
                    <h4 class="mb-1 text-white">Dashboard Admin</h4>
                    
                </div>
                <span class="small-muted"><i class="far fa-calendar-alt me-2"></i><span id="tanggal-hari-ini"></span></span>
            </div>

            <!-- Ringkasan -->
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3"><div class="card-stat d-flex align-items-center justify-content-between p-4"><i class="fas fa-shopping-bag stat-icon"></i><div class="ms-3"><p class="stat-label">Pesanan Hari Ini</p><h5>0 Pesanan</h5></div></div></div>
                <div class="col-sm-6 col-xl-3"><div class="card-stat d-flex align-items-center justify-content-between p-4"><i class="fas fa-receipt stat-icon"></i><div class="ms-3"><p class="stat-label">Total Pesanan</p><h5>0 Pesanan</h5></div></div></div>
                <div class="col-sm-6 col-xl-3"><div class="card-stat d-flex align-items-center justify-content-between p-4"><i class="fas fa-wallet stat-icon"></i><div class="ms-3"><p class="stat-label">Pendapatan Hari Ini</p><h5>Rp0</h5></div></div></div>
                <div class="col-sm-6 col-xl-3"><div class="card-stat d-flex align-items-center justify-content-between p-4"><i class="fas fa-chart-line stat-icon"></i><div class="ms-3"><p class="stat-label">Total Pendapatan</p><h5>Rp0</h5></div></div></div>
            </div>
        </div>

        <!-- Grafik -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-xl-6 col-sm-12">
                    <div class="dashboard-panel">
                        <div class="d-flex align-items-center justify-content-between mb-4"><h6 class="mb-0">Ringkasan Pesanan</h6><a href="{{ url('/admin/pesanan') }}">Lihat semua</a></div>
                        <canvas id="worldwide-sales"></canvas>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-12">
                    <div class="dashboard-panel">
                        <div class="d-flex align-items-center justify-content-between mb-4"><h6 class="mb-0">Pesanan dan Pendapatan</h6><a href="{{ url('/admin/laporan') }}">Lihat laporan</a></div>
                        <canvas id="salse-revenue"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pesanan terbaru -->
        <div class="container-fluid pt-4 px-4">
            <div class="dashboard-panel">
                <div class="d-flex align-items-center justify-content-between mb-4"><h6 class="mb-0">Pesanan Terbaru</h6><a href="{{ url('/admin/pesanan') }}">Lihat semua</a></div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" id="tabel-pesanan">
                        <thead><tr><th><input class="form-check-input" type="checkbox" aria-label="Pilih semua"></th><th>Tanggal</th><th>No. Pesanan</th><th>Pelanggan</th><th>Total</th><th>Status</th><th>Aksi</th></tr></thead>
                        <tbody>
                            <tr><td colspan="7" class="text-center small-muted py-4">Data pesanan akan ditampilkan setelah dihubungkan dengan database.</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Informasi bawah -->
        <div class="container-fluid pt-4 px-4 pb-4">
            <div class="row g-4">
                <div class="col-md-6 col-xl-4">
                    <div class="dashboard-panel">
                        <div class="d-flex align-items-center justify-content-between mb-3"><h6 class="mb-0">Aktivitas Terbaru</h6></div>
                        <div class="d-flex align-items-center border-bottom py-3"><div class="rounded-circle d-flex align-items-center justify-content-center me-3" style="width:40px;height:40px;background:#292c35;color:var(--laperin-orange)"><i class="fas fa-info"></i></div><div><div class="text-white">Informasi sistem</div><small class="small-muted">Aktivitas akan muncul di sini.</small></div></div>
                        <div class="d-flex align-items-center pt-3"><div class="rounded-circle d-flex align-items-center justify-content-center me-3" style="width:40px;height:40px;background:#292c35;color:var(--laperin-orange)"><i class="fas fa-check"></i></div><div><div class="text-white">Status sistem</div><small class="small-muted">Dashboard siap digunakan.</small></div></div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="dashboard-panel">
                        <h6 class="mb-3">Kalender</h6>
                        <div id="kalender-sederhana" class="text-white"></div>
                        <p class="small-muted mt-3 mb-0">Tanggal hari ini ditampilkan di bagian atas dashboard.</p>
                    </div>
                </div>
                <div class="col-md-12 col-xl-4">
                    <div class="dashboard-panel">
                        <h6 class="mb-3">Daftar Tugas</h6>
                        <form id="form-tugas" class="d-flex mb-3">
                            <input id="input-tugas" class="form-control border-0" type="text" placeholder="Tulis tugas..." aria-label="Tulis tugas">
                            <button type="submit" class="btn btn-primary ms-2">Tambah</button>
                        </form>
                        <div id="daftar-tugas">
                            <p class="small-muted mb-0">Belum ada tugas. Tambahkan tugas di atas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid px-4 pb-4">
            <div class="dashboard-panel py-3">
                <div class="d-flex flex-wrap justify-content-between gap-2">
                    <span class="small-muted">&copy; <span id="tahun"></span> Laperin. Hak cipta dilindungi.</span>
                    <span class="small-muted">Dashboard Admin Laperin</span>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" aria-label="Kembali ke atas"><i class="bi bi-arrow-up"></i></a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets-admin/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script src="{{ asset('assets-admin/js/main.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const now = new Date();
    const formatTanggal = new Intl.DateTimeFormat('id-ID', { day:'numeric', month:'long', year:'numeric' });
    document.getElementById('tanggal-hari-ini').textContent = formatTanggal.format(now);
    document.getElementById('tahun').textContent = now.getFullYear();
    document.getElementById('kalender-sederhana').innerHTML =
        '<div class="d-flex justify-content-between align-items-center mb-2"><strong>' +
        new Intl.DateTimeFormat('id-ID', { month:'long', year:'numeric' }).format(now) +
        '</strong><span style="color:var(--laperin-orange)">' + now.getDate() + '</span></div>';

    if (window.Chart) {
        const orange = '#ff8c00';
        const ctx1 = document.getElementById('worldwide-sales');
        if (ctx1) new Chart(ctx1.getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                datasets: [{ label: 'Pesanan', data: [12, 19, 14, 22, 18, 28, 24], backgroundColor: orange }]
            },
            options: { responsive:true, maintainAspectRatio:true, legend:{ labels:{ fontColor:'#c7c8ce' } },
                scales:{ xAxes:[{ ticks:{ fontColor:'#a7a9b4' }, gridLines:{ color:'rgba(255,255,255,.05)' } }],
                         yAxes:[{ ticks:{ beginAtZero:true, fontColor:'#a7a9b4' }, gridLines:{ color:'rgba(255,255,255,.07)' } }] } }
        });
        const ctx2 = document.getElementById('salse-revenue');
        if (ctx2) new Chart(ctx2.getContext('2d'), {
            type: 'line',
            data: {
                labels: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
                datasets: [
                    { label:'Jumlah Pesanan', data:[12, 19, 14, 22, 18, 28, 24], borderColor:orange, backgroundColor:'rgba(255,140,0,.18)', fill:true, lineTension:.3 },
                    { label:'Pendapatan (ribu Rp)', data:[120, 180, 140, 220, 190, 280, 250], borderColor:'#ffd08a', backgroundColor:'rgba(255,208,138,.08)', fill:true, lineTension:.3 }
                ]
            },
            options: { responsive:true, legend:{ labels:{ fontColor:'#c7c8ce' } },
                scales:{ xAxes:[{ ticks:{ fontColor:'#a7a9b4' }, gridLines:{ color:'rgba(255,255,255,.05)' } }],
                         yAxes:[{ ticks:{ beginAtZero:true, fontColor:'#a7a9b4' }, gridLines:{ color:'rgba(255,255,255,.07)' } }] } }
        });
    }

    const formTugas = document.getElementById('form-tugas');
    const inputTugas = document.getElementById('input-tugas');
    const daftarTugas = document.getElementById('daftar-tugas');
    formTugas.addEventListener('submit', function (e) {
        e.preventDefault();
        const isi = inputTugas.value.trim();
        if (!isi) { inputTugas.focus(); return; }
        const item = document.createElement('div');
        item.className = 'd-flex align-items-center justify-content-between border-bottom py-2 gap-2';
        const label = document.createElement('label');
        label.className = 'd-flex align-items-center gap-2 mb-0';
        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.className = 'form-check-input m-0';
        const teks = document.createElement('span');
        teks.textContent = isi;
        checkbox.addEventListener('change', function () {
            teks.style.textDecoration = checkbox.checked ? 'line-through' : 'none';
            teks.style.opacity = checkbox.checked ? '.6' : '1';
        });
        label.appendChild(checkbox); label.appendChild(teks);
        const hapus = document.createElement('button');
        hapus.type = 'button'; hapus.className = 'btn btn-sm'; hapus.style.color = 'var(--laperin-orange)';
        hapus.innerHTML = '<i class="fas fa-times"></i>';
        hapus.setAttribute('aria-label', 'Hapus tugas');
        hapus.addEventListener('click', function () { item.remove(); if (!daftarTugas.children.length) daftarTugas.innerHTML = '<p class="small-muted mb-0">Belum ada tugas. Tambahkan tugas di atas.</p>'; });
        if (daftarTugas.querySelector('p')) daftarTugas.innerHTML = '';
        item.appendChild(label); item.appendChild(hapus); daftarTugas.appendChild(item);
        inputTugas.value = ''; inputTugas.focus();
    });

    const search = document.getElementById('search-dashboard');
    if (search) search.addEventListener('input', function () {
        const query = this.value.toLowerCase();
        document.querySelectorAll('#tabel-pesanan tbody tr').forEach(function (row) {
            row.style.display = row.textContent.toLowerCase().includes(query) ? '' : 'none';
        });
    });

    const spinner = document.getElementById('spinner');
    if (spinner) { spinner.classList.remove('show'); spinner.style.display = 'none'; }
});
</script>
</body>
</html>
