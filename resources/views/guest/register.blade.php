@extends('guest.layout')

@section('title', 'Register - Laperin')

@section('content')
<div class="row justify-content-center align-items-center w-100 pt-5 mt-5 pb-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-5">
        <div class="bg-dark rounded p-4 p-sm-5 shadow-lg border border-secondary">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <a href="{{ route('guest.home') }}" class="text-decoration-none">
                    <h3 class="text-warning mb-0"><i class="fa fa-utensils me-2"></i>Laperin</h3>
                </a>
                <h4 class="text-white mb-0">Register</h4>
            </div>

            <form action="#" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="name" class="form-control bg-secondary text-white border-0" id="floatingName" placeholder="Name" required>
                    <label for="floatingName" class="text-white-50">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control bg-secondary text-white border-0" id="floatingEmail" placeholder="name@example.com" required>
                    <label for="floatingEmail" class="text-white-50">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control bg-secondary text-white border-0" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword" class="text-white-50">Password</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" name="password_confirmation" class="form-control bg-secondary text-white border-0" id="floatingConfirmPassword" placeholder="Confirm Password" required>
                    <label for="floatingConfirmPassword" class="text-white-50">Confirm Password</label>
                </div>
                <button type="submit" class="btn btn-warning text-dark fw-bold py-3 w-100 mb-2">
                    <i class="fa fa-user-plus me-2"></i>REGISTER
                </button>
            </form>
        </div>
    </div>
</div>
@endsection