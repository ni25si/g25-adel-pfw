@extends('layouts.admin.app')

@section('content')
<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#"><i class="fas fa-home"></i></a>
            </li>
            <li class="breadcrumb-item active text-warning" aria-current="page">/ Pelanggan</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Data Pelanggan</h1>
            <p class="mb-0">List data seluruh pelanggan</p>
        </div>
        <div>
            <a href="{{ route('pelanggan.create') }}" class="btn btn-success d-inline-flex align-items-center">
                <i class="fas fa-plus me-2"></i> Tambah Pelanggan
            </a>
        </div>
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="card card-body border-0 shadow table-wrapper table-responsive">
    <table class="table table-hover align-items-center">
        <thead>
            <tr>
                <th class="border-gray-200 text-dark">First Name</th>
                <th class="border-gray-200 text-dark">Last Name</th>
                <th class="border-gray-200 text-dark">Birthday</th>
                <th class="border-gray-200 text-dark">Gender</th>
                <th class="border-gray-200 text-dark">Email</th>
                <th class="border-gray-200 text-dark">Phone</th>
                <th class="border-gray-200 text-dark">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPelanggan as $item)
                <tr>
                    <td class="text-dark fw-bold">{{ $item->first_name }}</td>
                    <td class="text-dark">{{ $item->last_name }}</td>
                    <td class="text-dark">{{ $item->birthday }}</td>
                    <td class="text-dark">{{ $item->gender }}</td>
                    <td class="text-dark">{{ $item->email }}</td>
                    <td class="text-dark">{{ $item->phone }}</td>
                    <td>
                        <a href="{{ route('pelanggan.edit', $item) }}" class="btn btn-sm btn-warning text-white me-1">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('pelanggan.destroy', $item) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger text-white">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection