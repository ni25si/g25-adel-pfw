<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <h1 class="text-primary m-0 d-flex align-items-center">
            <img src="{{ asset('assets-guest/img/laperin.png') }}" alt="Logo Laperin" style="height: 75px; margin-right: 4px;">Laperin
        </h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('home') }}#about" class="nav-item nav-link">About</a>
            <a href="{{ route('home') }}#service" class="nav-item nav-link">Service</a>
            <a href="{{ route('home') }}#menu" class="nav-item nav-link">Menu</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('home') }}#reservation" class="dropdown-item">Booking</a>
                    <a href="{{ route('home') }}#team" class="dropdown-item">Our Team</a>
                    <a href="{{ route('home') }}#testimonial" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{ route('home') }}#contact" class="nav-item nav-link">Contact</a>
            <a href="{{ route('register') }}" class="nav-item nav-link {{ request()->routeIs('register') ? 'active' : '' }}">Register</a>
        </div>
        <a href="{{ route('auth.index') }}" class="btn btn-primary py-2 px-4">Login</a>
    </div>
</nav>
