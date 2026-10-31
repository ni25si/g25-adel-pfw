<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top px-4 py-3">
    <a href="{{ route('guest.home') }}" class="navbar-brand d-flex align-items-center me-4">
        <h3 class="text-primary mb-0"><i class="fa fa-utensils me-2"></i>Laperin</h3>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto align-items-center">
            <a href="{{ route('guest.home') }}" class="nav-item nav-link {{ request()->routeIs('guest.home') ? 'active' : '' }}">
                <i class="fa fa-home me-1"></i> Home
            </a>
            <a href="{{ route('guest.login') }}" class="nav-item nav-link {{ request()->routeIs('guest.login') ? 'active' : '' }}">
                <i class="fa fa-sign-in-alt me-1"></i> Login
            </a>
            <a href="{{ route('guest.register') }}" class="btn btn-primary ms-3 px-3 rounded-pill">
                <i class="fa fa-user-plus me-1"></i> Register
            </a>
        </div>
    </div>
</nav>