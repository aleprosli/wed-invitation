<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Engagement</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
</head>
    <style>
        h4 { font-family: 'Poppins'; font-size: 12px}
    </style>
    <nav class="navbar bg-white">

    </nav>

    <body class="bg-white">
        <div id="app">

            <main class="py-4 bg-white">
                @yield('content')
            </main>
        </div>
    </body>

    <footer class="row text-center mt-2">
        <h4 class="text-muted">Made by Aliff Rosli</h4>
    </footer>
</html>
