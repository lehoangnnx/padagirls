<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Laravel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style-dark.css') }}">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">


</head>

<body>
    <!--loader-->
    @include('inc.loader')
    <!--loader end-->

    <!-- main start  -->
    <div id="main">
        <!-- header start  -->
    @include('inc.header')
        <!-- header end -->

        <!-- wrapper  -->
        <div id="wrapper">
            <!--content -->
            @yield('content')
            <!--content end-->

            <!--share-wrapper-->
            @include('inc.shareWrapper')
            <!--share-wrapper end-->
        </div>
        <!-- wrapper end -->

        <!-- sidebar -->
        @include('inc.sidebar')
        <!-- sidebar end -->

        <!-- cursor-->
        {{--
        <div class="element">
            <div class="element-item"></div>
        </div> --}}
        <!-- cursor end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>         
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>