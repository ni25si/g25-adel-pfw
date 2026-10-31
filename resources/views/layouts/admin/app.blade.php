<!DOCTYPE html>
<html lang="en">
<head>
    ...
    {{-- Start CSS --}}
    @include('layouts.admin.css')
    {{-- End CSS --}}
</head>
<body>
    {{-- start sidebar --}}
    @include('layouts.admin.sidebar')
    {{-- end sidebar --}}
    <main class="content">
        {{-- start header --}}
        @include('layouts.admin.header')
        {{-- end header --}}
        {{-- start main content --}}
        @yield('content')
        {{-- end main content --}}
        {{-- start footer --}}
        @include('layouts.admin.footer')
        {{-- end footer --}}
    </main>
    {{-- Start JS --}}
    @include('layouts.admin.js')
    {{-- End JS --}}
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laperin - @yield('title')</title>
    @include('layouts.admin.css')
</head>
<body>
<div class="container-fluid position-relative d-flex p-0">
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center" style="z-index:9999;">
        <div class="spinner-border" style="width:3rem;height:3rem;color:var(--laperin-orange)" role="status">
            <span class="visually-hidden">Memuat...</span>
        </div>
    </div>

    @include('layouts.admin.sidebar')

    <div class="content">
        @include('layouts.admin.header')

        @yield('content')

        @include('layouts.admin.footer')
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" aria-label="Kembali ke atas"><i class="bi bi-arrow-up"></i></a>
</div>

@include('layouts.admin.js')
@stack('scripts')
</body>
</html>
</body>
</html>
