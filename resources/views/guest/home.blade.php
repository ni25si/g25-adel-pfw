@extends('guest.layout')

@section('title', 'Home - Laperin')

@section('content')
<div class="col-12 col-md-8 col-lg-6 text-center">
    <div class="bg-secondary rounded h-100 p-5 shadow-lg">
        <div class="mb-4">
            <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px;">
                <i class="fa fa-utensils fs-2"></i>
            </div>
            <h1 class="text-white mb-2">Selamat Datang di <span class="text-primary">Laperin</span></h1>
            <p class="text-muted">Silakan masuk ke sistem atau daftar akun baru untuk memulai.</p>
        </div>
        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="{{ route('guest.login') }}" class="btn btn-primary px-4 py-2">
                <i class="fa fa-sign-in-alt me-2"></i>Login
            </a>
            <a href="{{ route('guest.register') }}" class="btn btn-outline-light px-4 py-2">
                <i class="fa fa-user-plus me-2"></i>Register
            </a>
        </div>
    </div>
</div>
@endsection