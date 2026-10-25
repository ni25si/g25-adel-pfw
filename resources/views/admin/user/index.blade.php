@extends('layouts.admin.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4">Data User</h2>
        <p class="mb-0">List data seluruh user</p>
    </div>
    <div>
        <a href="{{ route('user.create') }}" class="btn btn-success d-inline-flex align-items-center">
            Tambah User
        </a>
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
                <th class="border-gray-200 text-dark">NAME</th>
                <th class="border-gray-200 text-dark">EMAIL</th>
                <th class="border-gray-200 text-dark">PASSWORD</th>
                <th class="border-gray-200 text-dark">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUser as $item)
                <tr>
                    <td class="text-dark fw-bold">{{ $item->name }}</td>
                    <td class="text-dark">{{ $item->email }}</td>
                    <td class="text-dark">{{ $item->password }}</td>
                    <td>
                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-warning text-white me-1">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                        <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger text-white">
                                <i class="fas fa-trash me-1"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection