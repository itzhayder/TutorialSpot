<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('styles')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-nav-c shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    TutorialSpot
                </a>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <div class="space"></div>

        <footer>
            Copyright 2020. TutorialSpot
        </footer>
    </div>

    

</body>

<!-- <footer>
            Copyright 2020. TutorialSpot
</footer> -->

</html>
