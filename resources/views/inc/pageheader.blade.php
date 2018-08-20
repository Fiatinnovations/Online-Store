<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>Laravel Shop</title>
    <!-- SEO Meta
      ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="2 Days">
    <meta name="robots" content="ALL">
    <meta name="rating" content="8 YEARS">
    <meta name="Language" content="en-us">
    <meta name="GOOGLEBOT" content="NOARCHIVE">
    <!-- Mobile Specific Metas
      ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
      ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('asset3/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('asset3/css/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('asset3/css/jquery-ui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('asset3/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('asset3/css/fotorama.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('asset3/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('asset3/css/responsive.css')}}">
    <link rel="shortcut icon" href="{{ URL::asset('asset3/images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{ URL::asset('asset3/images/apple-touch-icon.html')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('asset3/images/apple-touch-icon-72x72.html')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('asset3/images/apple-touch-icon-114x114.html')}}">
</head>
<body >

<div class="main">

    @yield('content')