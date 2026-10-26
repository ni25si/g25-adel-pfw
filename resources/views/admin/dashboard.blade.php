@extends('layouts.admin.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
        <div>
            <h4 class="mb-1 text-white">Dashboard Admin</h4>
        </div>
        <span class="small-muted"><i class="far fa-calendar-alt me-2"></i><span id="tanggal-hari-ini"></span></span>
    </div>

    <div class="row g-4">
        <div class="col-sm-6 col-xl-3"><div class="card-stat d-flex align-items-center justify-content-between p-4"><i class="fas fa-shopping-bag stat-icon"></i><div class="ms-3"><p class="stat-label">Pesanan Hari Ini</p><h5>0 Pesanan</h5></div></div></div>
        <div class="col-sm-6 col-xl-3"><div class="card-stat d-flex align-items-center justify-content-between p-4"><i class="fas fa-receipt stat-icon"></i><div class="ms-3"><p class="stat-label">Total Pesanan</p><h5>0 Pesanan</h5></div></div></div>
        <div class="col-sm-6 col-xl-3"><div class="card-stat d-flex align-items-center justify-content-between p-4"><i class="fas fa-wallet stat-icon"></i><div class="ms-3"><p class="stat-label">Pendapatan Hari Ini</p><h5>Rp0</h5></div></div></div>
        <div class="col-sm-6 col-xl-3"><div class="card-stat d-flex align-items-center justify-content-between p-4"><i class="fas fa-chart-line stat-icon"></i><div class="ms-3"><p class="stat-label">Total Pendapatan</p><h5>Rp0</h5></div></div></div>
    </div>
</div>

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
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const now = new Date();
    const formatTanggal = new Intl.DateTimeFormat('id-ID', { day:'numeric', month:'long', year:'numeric' });
    document.getElementById('tanggal-hari-ini').textContent = formatTanggal.format(now);
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
});
</script>
@endpush
