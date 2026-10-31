@extends('guest.layout')

@section('title', 'Login - Laperin')

@section('content')
<div class="row justify-content-center align-items-center w-100 pt-5 mt-5 pb-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="bg-dark rounded p-4 p-sm-5 shadow-lg border border-secondary">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <a href="{{ route('guest.home') }}" class="text-decoration-none">
                    <h3 class="text-warning mb-0"><i class="fa fa-utensils me-2"></i>Laperin</h3>
                </a>
                <h4 class="text-white mb-0">Login</h4>
            </div>

            {{-- Alert Error jika Login Gagal --}}
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                    <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('guest.login.process') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control bg-secondary text-white border-0" id="floatingInput" placeholder="Username" required>
                    <label for="floatingInput" class="text-white-50">Username</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control bg-secondary text-white border-0" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword" class="text-white-50">Password</label>
                </div>
                <button type="submit" class="btn btn-warning text-dark fw-bold py-3 w-100 mb-2">
                    <i class="fa fa-sign-in-alt me-2"></i>LOGIN
                </button>
            </form>
        </div>
    </div>
</div>
@endsection