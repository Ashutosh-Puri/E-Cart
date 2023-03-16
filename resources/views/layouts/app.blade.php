<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="body d-flex flex-column min-vh-100">
    @include('layouts.navbar')
    <div class="p-0 m-0  ">
        @yield('content')
    </div>
    @include('layouts.footer')
    @livewireScripts
    <script src="{{ url('/livewire/livewire.js') }}"></script>
    <script src="{{ url('js/jquery.js') }}"></script>
    @yield('scripts')
</body>
</html>
