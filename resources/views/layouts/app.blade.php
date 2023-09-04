<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>প্রণয়ী পাঠাগার || আলোকিত মানুষের জন্য বই </title>
    <link rel="shortcut icon" href="pHomeContent/img/favicon.png">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--site link-->
    <link rel="shortcut icon" href="{{asset('pHomeContent/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('pHomeContent/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('pHomeContent/fi/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('pHomeContent/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('pHomeContent/tuner/css/colorpicker.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('pHomeContent/tuner/css/styles.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('pHomeContent/css/jquery.fancybox.css')}}" />
    <link rel="stylesheet" href="{{asset('pHomeContent/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('pHomeContent/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('pHomeContent/css/writer.css')}}">
    <!--styles -->
    <link href="{{asset('pHomeContent/Content/login-register.css')}}" rel="stylesheet" />
    <link href="{{asset('pHomeContent/Content/bundle.css')}}" rel="stylesheet"/>
    <script src="{{asset('pHomeContent/bundles/modernizr8fce?v=wBEWDufH_8Md-Pbioxomt90vm6tJN2Pyy9u9zHtWsPo1')}}"></script>
</head>
<body>
    <div id="app">
        <div id="home" class="page-content padding-none">
            @include('Frontend.Layout.Partial._header')
            @yield('content')
        
        @include('Frontend.Layout.Partial._footer')
    
    @include('Frontend.Layout.Partial._script')            
</body>
</html>

