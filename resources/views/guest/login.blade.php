@extends('layouts.guest.app')

@section('title', 'Login')

@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Login</h1>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Masuk</h5>
                <h1 class="mb-4 text-center">Selamat Datang Kembali</h1>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username" value="{{ old('username') }}" required>
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Login</button>
                        </div>
                        <div class="col-12 text-center">
                            Belum punya akun? <a href="{{ route('register') }}">Register</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
