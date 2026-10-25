@extends('layouts.admin.app')
@section('title', 'Laperin - Tambah User')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">Tambah User</h2>
            <p class="mb-0">Form untuk menambahkan data user baru.</p>
        </div>
        <div>
            <a href="{{ route('user.index') }}" class="btn btn-sm btn-gray-800">Kembali</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card card-body border-0 shadow mb-4">
                {{-- Alert Flash Data Success / Error --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name">Nama</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                type="text" value="{{ old('name') }}" placeholder="Masukkan nama">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                type="email" value="{{ old('email') }}" placeholder="Masukkan email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password">Password</label>
                            <input class="form-control @error('password') is-invalid @enderror" id="password"
                                name="password" type="password" placeholder="Masukkan password (min. 8 karakter)">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input class="form-control" id="password_confirmation" name="password_confirmation"
                                type="password" placeholder="Ulangi password">
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Simpan</button>
                        <a href="{{ route('user.index') }}" class="btn btn-light mt-2">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection