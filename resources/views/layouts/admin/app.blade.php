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
</body>
</html>