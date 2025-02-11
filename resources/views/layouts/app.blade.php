<!DOCTYPE html>
<html class="dark">
    <head>
        <link rel="icon" type="image/png" href="{{ url('/mos_favicon.png') }}" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="description" content="MOS Interview Task" />

        <title>{{ $title ?? 'MOS Interview Task' }}</title>

        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @livewireStyles
        @livewireScripts
        <!-- Scripts -->
    </head>
    <body class="bg-base-500 font-sans antialiased transition">
        <main class="m-4 mx-auto max-w-6xl">
            @yield('content')
        </main>
    </body>
</html>
