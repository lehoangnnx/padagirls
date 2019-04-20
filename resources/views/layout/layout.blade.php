<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic -->
    <title>Travis</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travis - Responsive HTML5 Template">
    <meta name="author" content="pixel-mafia.com">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="http://pixel-mafia.com/demo/html-templates/travis/img/favicon.ico">

    <!-- Apple Touch -->
    <link rel="apple-touch-icon" href="http://pixel-mafia.com/demo/html-templates/travis/img/apple57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://pixel-mafia.com/demo/html-templates/travis/img/apple72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://pixel-mafia.com/demo/html-templates/travis/img/apple114.png">

    <!-- Mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Responsive -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/grid.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/pm-icons.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" type="text/css" media="all">

</head>

<body>
    <!--loader-->
    @include('inc.loader')
    <!--loader end-->
    @include('inc.sharing')

    <!-- header start  -->
    @include('inc.header')
    <!-- header end -->

    @yield('content')
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/lazysizes.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

<script>

    </script>
</body>

</html>