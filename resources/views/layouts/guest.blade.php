<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
    <body>
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
