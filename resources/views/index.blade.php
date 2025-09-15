<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gazeta - Responsive Magazine Blog Template</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Google Fonts & Fontawesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,900,800' rel='stylesheet'
        type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,100,300,300italic,100italic,400italic,600,600italic,700,700italic'
        rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:400,100,300,300italic,100italic,400italic,600,600italic,700,700italic'
        rel='stylesheet' type='text/css'>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('js/vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prettyphoto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="{{ asset('js/css3-mediaqueries.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 <![endif]-->

    <!-- JS - MEDIAQUERIES -->

</head>

<body>
    <img src="https://img.freepik.com/free-photo/closeup-scarlet-macaw-from-side-view-scarlet-macaw-closeup-head_488145-3540.jpg?semt=ais_incoming&w=740&q=80" alt="">
    <!-- Topbar -->
    <div class="top-bar container">
        <div class="row">
            <div class="col-md-6">
                <ul class="tb-left">
                    <li class="tbl-date"><span>Tuesday, November 4, 2014</span></li>
                    <li class="tbl-temp"><i class="fa fa-sun-o"></i>32&deg; C</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="tb-right">
                    <li class="tbr-social">
                        <span>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-google-plus"></a>
                            <a href="#" class="fa fa-rss"></a>
                            <a href="#" class="fa fa-pinterest"></a>
                            <a href="#" class="fa fa-youtube-play"></a>
                        </span>
                    </li>
                    <li class="tbr-login">
                        <a href="./login.html">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container wrapper">
        <div class="header">
            <div class="col-md-12">
                <!-- Logo -->
                <div class="col-md-4 logo">
                    <h1><a href="./index.html"><img src="{{ asset('img/logo/pressmanews-logo.png') }}" alt=""
                                style="width: 200px;" /></a></h1>
                </div>
                <!-- News Ticker -->
                <div class="col-md-8">
                    <a href="#" class="pull-right"><img src="" class="img-responsive"
                            alt="" /></a>
                </div>
            </div>
        </div>

        @include('layouts.navbar')

        <!-- Main Content -->
        @yield('content')

        @include('layouts.footer')

        <div class="clearfix space30"></div>

        <!-- Javascript -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/vendor/slick/slick.js') }}"></script>
        <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('js/jflickrfeed.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/jquery.spasticNav.js') }}"></script>
        <script src="{{ asset('js/jquery.prettyphoto.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
