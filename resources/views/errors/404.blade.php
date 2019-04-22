
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic -->
    <title>PadaGirls</title>
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

    <body class="pm_dark_type page404" cz-shortcut-listen="true">
        <!-- Preloader -->
        <div class="preloader_active" style="width: 1366px; height: 625px; display: none;">
            <div class="pm_preloader_load_back">
                <div class="pm_preloader_border"></div>
                <div class="pm_preloader_load_line active"></div>
            </div>
        </div>
    
        <!-- Sharing Popup -->
       
    
        <!-- Header -->
        <header class="pm_header">
            <div class="pm_fleft">
                <a href="{{ route('home') }}" class="pm_logo">
                    <img class="pm_non_retina" src="img/logo-dark.png" alt="Travis">
                    <img class="pm_retina" src="img/retina/logo-dark.png" alt="Travis">
                </a>
            </div><!-- pm_fleft -->
            <div class="clear"></div>
        </header>
    
        <!-- Menu Mobile -->
        <div class="pm_menu_mobile_container_wrapper">
            <div class="pm_menu_mobile_container pm_container"></div>
        </div>
    
        <!-- Content -->
        <div class="pm_404_container" style="height: 438px;">
            <div class="pm_404_content_wrapper" style="margin-top: 112.5px;">
                <div class="pm_404_title">
                    404. Page not found
                </div>
                <div class="pm_404_description">
                    <h3>Sorry, it looks like there was an error</h3>
                    <p>There's a lot of reasons why this page is 404. Don't waste your time enjoying the look of it<br>You could return to the homepage or search using the search box below.</p>
                </div>
            </div>
        </div>
        <div class="pm_404_searh_container">
                <a href="{{ route('home') }}">
                    <span class="pm_icon_search"></span>
                </a>
                <div class="clear"></div>
        </div>
        <a class="pm_404_back_button" href="javascript:history.back()"></a>
    
    
    <!-- JS -->
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

<script>

    </script>
</body>

</html>