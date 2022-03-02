<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KPMG - @yield('title') </title>

    <link rel="icon" type="image/png" href="https://home.kpmg/etc/designs/default/kpmg/favicons/favicon-96x96.png"
        sizes="16x16" class="chrome">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div class="">
        {{-- HEADER --}}
        @include('layouts.header')

        <div class="container mb-4">
            @include('components.flash-message')
            @yield('content')
        </div>


        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
    @yield('scripts')
</body>

</html>
