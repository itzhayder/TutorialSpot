<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TutorialSpot</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script src="jquery-3.4.1.min.js"></script> -->
    <!-- Clipboard.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/playback.css') }}" rel="stylesheet">
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
    
    <script>
        var clipboard = new ClipboardJS('.btn');

        clipboard.on('success', function(e) {
            e.clearSelection();

            document.querySelector(".clipboard").style.display = "block";
		    setTimeout(function() {
			    document.querySelector(".clipboard").style.display = "none";
            },2000);
        });

        
    </script>

</body>

<!-- <footer>
            Copyright 2020. TutorialSpot
</footer> -->

</html>
