<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>

    <link rel="stylesheet" href="{{ URL::to('/assets/css/bootstrap.min.css') }}">
    <link href= "{{ URL::to('/assets/css/bootstrap.min.css') }}"  rel="stylesheet">
    <link href= "{{ URL::to('/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href= "{{ URL::to('/assets/css/prettyPhoto.css') }}"rel="stylesheet">
    <link href= "{{ URL::to('/assets/css/price-range.css') }}" rel="stylesheet">
    <link href= "{{ URL::to('/assets/css/animate.css') }}" rel="stylesheet">
    <link href= "{{ URL::to('/assets/css/main.css') }}"rel="stylesheet">
    <link href= "{{ URL::to('/assets/css/responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href= "{{ URL::to('assets/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href= "{{ URL::to('assets/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href= "{{ URL::to('assets/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href= "{{ URL::to('assets/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href= "{{ URL::to('assets/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->
    <title>@yield('title')</title>
</head>
<body>

@include('eshopper.header')

@yield('content')

@include('eshopper.footer')
    <script src="{{ URL::to('assets/js/jquery.js')}}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::to('assets/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ URL::to('assets/js/price-range.js')}}"></script>
    <script src="{{ URL::to('assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{ URL::to('assets/js/main.js')}}"></script>
</body>
</html>

