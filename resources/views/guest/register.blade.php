@extends('layouts.guest.app')

@section('title', 'Register')

@section('content')
<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Register</h1>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Daftar</h5>
                <h1 class="mb-4 text-center">Buat Akun Laperin</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name" value="{{ old('name') }}" required>
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email" value="{{ old('email') }}" required>
                                <label for="email">Email</label>
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
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                    placeholder="Confirm Password" required>
                                <label for="password_confirmation">Confirm Password</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Register</button>
                        </div>
                        <div class="col-12 text-center">
                            Sudah punya akun? <a href="{{ route('auth.index') }}">Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
