@extends('layouts.admin.app')

@section('content')

        <div class="py-4">
            <!-- 1. Breadcrumb / Penanda Atas dengan Logo Rumah -->
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-0 align-items-center">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}" style="color: #9ca3af !important;" class="me-1">
                            <i class="fas fa-home fs-6"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/guest" style="color: #9ca3af !important;">Pelanggan</a>
                    </li>
                    <li class="breadcrumb-item active" style="color: #6b7280 !important;" aria-current="page">Tambah
                        Pelanggan</li>
                </ol>
            </nav>

            <!-- 2. Judul, Sub-judul, dan Tombol Kembali sejajar -->
            <div class="d-flex justify-content-between align-items-center w-100 flex-wrap mt-2">
                <div class="mb-3 mb-lg-0">
                    <h1 class="h4 text-white fw-bold mb-1">Tambah Pelanggan</h1>
                    <p class="mb-0 text-gray-300">Form untuk menambahkan data pelanggan baru.</p>
                </div>
                <div>
                    <a href="/guest" class="btn btn-outline-warning d-inline-flex align-items-center">Kembali</a>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <form action="{{route('pelanggan.store')}}" method="POST">
                        @csrf
                        <div class="row mb-4">
                            <div class="col-lg-4 col-sm-6">
                                <!-- First Name -->
                                <div class="mb-3">
                                    <label for="first_name" class="form-label text-dark">First name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        value="{{ old('first_name') }}" required>
                                </div>

                                <!-- Last Name -->
                                <div class="mb-3">
                                    <label for="last_name" class="form-label text-dark">Last name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        value="{{ old('last_name') }}" required>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <!-- Birthday -->
                                <div class="mb-3">
                                    <label for="birthday" class="form-label text-dark">Birthday</label>
                                    <input type="date" name="birthday" id="birthday" class="form-control text-white"
                                        style="color-scheme: dark;" value="{{ old('birthday') }}">
                                </div>

                                <!-- Gender -->
                                <div class="mb-3">
                                    <label for="gender" class="form-label text-dark">Gender</label>
                                    <select name="gender" class="form-select text-white"
                                        style="appearance: auto !important; -webkit-appearance: auto !important; color-scheme: dark;">
                                        <option value="">-- Pilih --</option>
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                            Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label text-dark">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email') }}" required>
                                </div>

                                <!-- Phone -->
                                <div class="mb-3">
                                    <label for="phone" class="form-label text-dark">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="{{ old('phone') }}">
                                </div>

                                <!-- Buttons -->
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{ route('pelanggan.index') }}"
                                        class="btn btn-outline-secondary ms-2">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        </div>

@endsection
        