<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Hsoft">
    <meta name="MobileOptimized" content="320">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Let's Travel</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="{{ asset('dns-prefetch')}}" href="https://fonts.gstatic.com">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- favicon links-->
    <link rel="icon" type="image/icon" href="{{ asset('favicon.png')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom-animation.css')}}">
    <link rel="stylesheet" href="{{ asset('js/plugin/owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('js/plugin/owl/owl.theme.css')}}">
    <link rel="stylesheet" href="{{ asset('js/plugin/magnific/magnific-popup.css')}}">
    <link href="{{ asset('js/plugin/revolution/css/settings.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('js/plugin/revolution/css/layers.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('js/plugin/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
    
    <div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #343a40;">
            <div class="container">
                header
            </div>
        </nav> -->
        
        <main class="">
            @yield('content')
        </main>
    </div>
    
    <!--scripts start-->
    <script src="{{ asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/tether.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('js/appear.js')}}"></script>
    <script src="{{ asset('js/wow.js')}}"></script>
    <script src="{{ asset('js/plugin/owl/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/plugin/magnific/jquery.magnific-popup.min.js')}}"></script>
    <!--Revolution slider js-->
    <script src="{{ asset('js/plugin/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ asset('js/plugin/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('js/plugin/revolution/js/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{ asset('js/plugin/revolution/js/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ asset('js/plugin/revolution/js/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ asset('js/plugin/revolution/js/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{ asset('js/plugin/revolution/js/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
</body>
</html>