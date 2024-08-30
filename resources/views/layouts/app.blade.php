<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials._head')
<body class="d-flex flex-column min-vh-100">
    @include('layouts.partials._navbar')
    @yield('content')
    <!-- Footer -->
    <footer class="bg-primary text-center text-white mt-auto">
        {{-- @include('layouts.partials._footer') --}}
        @include('layouts.partials._copyright')
    </footer>
    <!-- Footer end -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>