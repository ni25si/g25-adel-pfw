<div class="col-md-4 mb-4">
    <div class="card h-100 shadow border rounded-3 p-2">
        <div class="card-body">
            <!-- Badge Nama Kategori dari Query Builder Join -->
            <span class="badge bg-warning text-dark mb-2">
                {{ $menu->nama_kategori ?? 'Umum' }}
            </span>
            <h5 class="card-title fw-bold">{{ $menu->nama_menu }}</h5>
            <p class="card-text text-muted">{{ $menu->deskripsi ?? '' }}</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
                <span class="fw-bold text-success fs-5">
                    Rp {{ number_format($menu->harga ?? 0, 0, ',', '.') }}
                </span>
            </div>
        </div>
    </div>
</div>