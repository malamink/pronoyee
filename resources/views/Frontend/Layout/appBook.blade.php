<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>প্রণয়ী পাঠাগার @yield('title') </title>
    @include('Frontend.Layout.Partial._style')
</head>
<body class="shop">

	<header>
            <div class="sticky-wrapper">
                <div class="sticky-menu">
                    <div class="grid-row clear-fix">
                        <!-- logo -->
                        <a href="{{url('/')}}" class="logo">
                            <img src="{{asset('pHomeContent/img/pronoyee-logo.png')}}">
                            <img src="{{asset('pHomeContent/img/pronoyee.png')}}" />
                        </a>
                        <!-- / logo -->
                        @include('Frontend.Layout.Partial._navbar2')
                    </div>
                </div>
            </div> 
            <!-- sticky menu -->
            @include('Frontend.Layout.Partial._title')
        </header>
        @yield('content')
        @include('Frontend.Layout.Partial._footer')
        @include('Frontend.Layout.Partial._script')
    </body>
</html>
