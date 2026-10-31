<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laperin - @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    @include('layouts.guest.css')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        @include('layouts.guest.header')

        @yield('content')

        @include('layouts.guest.footer')
    </div>

    @include('layouts.guest.js')
    @stack('scripts')
</body>
</html>
