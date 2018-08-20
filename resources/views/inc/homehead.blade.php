<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from shop.jsdecena.me/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2018 10:26:01 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-9325492-23"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-9325492-23');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Ecommerce Website By Olasunkanmi</title>
    <link href="{{ URL::asset('assets2/front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets2/front/style.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ URL::asset('assets2/front/js/html5shiv.min.js') }}"></script>
    <script src="{{ URL::asset('assets2/front/js/respond.min.js') }}"></script>

    <![endif]-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('assets2/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('assets2/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('assets2/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('assets2/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('assets2/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('assets2/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('assets2/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('assets2/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets2/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::asset('assets2/favicons/apple-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('assets2/favicons/apple-icon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('assets2/favicons/apple-icon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets2/favicons/apple-icon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('assets2/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="https://shop.jsdecena.me/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ URL::asset('assets2/front/css/drift-basic.min.css') }}/">
    <style type="text/css">
        .product-cover-wrap {
            border: 1px solid #eee;
        }

        .product-description {
            position: relative;
        }

        .excerpt {
            display: none;
        }

        .modal-dialog .modal-content {
            min-width: 800px;
        }

        .modal-dialog h1 {
            font-size: 18px;
            text-align: left;
            line-height: 24px;
        }

        .modal-dialog h1 small {
            display: block;
            padding-top: 10px;
        }

        .modal-dialog .description,
        .modal-dialog .excerpt {
            font-size: 14px;
            line-height: 16px;
            text-align: left;
        }

        .modal-dialog .description {
            display: none;
        }

        .modal-dialog #quantity {
            width: 85px;
        }

        .modal-dialog .modal-content {
            padding: 15px;
        }

        .modal-content .excerpt {
            display: block;
            text-align: left;
        }

        #thumbnails li {
            margin-bottom: 10px;
        }

        #thumbnails li img {
            width: 100px;
        }

        #thumbnails li a:hover img {
            border: 1px solid #d89522;
        }
    </style>
</head>
<body>

<section>
    <div class="row hidden-xs">
        <div class="container">
            <div class="clearfix"></div>
            <div class="pull-right">
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::guest())
                    <li><a href="{{url('/login')}}"> <i class="fa fa-lock"></i> Login</a></li>
                    <li><a href="{{url('/register')}}"> <i class="fa fa-sign-in"></i> Register</a></li>
                    @else
                        <li><a href="{{url('/logout')}}"> <i class="fa fa-unlock"></i> Logout</a></li>
                        <li><a href="#" > Howdy! {{ Auth::user()->name }}</a></li>
                    @endif
                    <li id="cart" class="menubar-cart">
                        @if(Auth::guest())

                           @if((Cart::instance('default')->count())>0)
                            <a href="{{url('/login')}}" title="View Cart" class="awemenu-icon menu-shopping-cart">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span class="cart-number">{{Cart::instance('default')->count()}}</span>
                            </a>

                               {{--This should be made such that you re being redirected to the wish lists, not to a particular
                            Id as indicated in the code below--}}

                                            {{--@if(Cart::content())
                                                @foreach(Cart::content() as $cartItem)

                                            <a href="{{route('wishlist.index'}}" title="View Wishlist" class="awemenu-icon menu-shopping-cart">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                <span class="cart-number">{{Cart::instance('wishList')->count()}}</span>
                                            </a>
                                                @endforeach
                                                @endif--}}


                            @endif
                        @else
                            @if((Cart::instance('default')->count())>0)
                        <a href="{{route('cart.index')}}" title="View Cart" class="awemenu-icon menu-shopping-cart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <span class="cart-number">{{Cart::instance('default')->count()}}</span>
                        </a>
                            @endif
                            @endif

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <header id="header-section">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header col-md-2">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Bottles</a>
                </div>
                <div class="col-md-10">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="list-unstyled list-inline nav navbar-nav">
                            <li>
                                <a  href="category/accessories.html">Home </a>
                            </li>
                            <li>
                                <a  href="category/kids.html">Shop </a>
                            </li>
                            <li>
                                <a  href="category/men.html">About Us </a>
                            </li>
                            <li>
                                <a  href="category/shirts.html">Contact </a>
                            </li>
                            <li>
                                <a  href="category/shoes.html">Vodka </a>
                            </li>
                            <li>
                                <a  href="category/women.html">Spirit </a>
                            </li>
                            <li>
                                <a  href="category/women.html">Shop </a>
                            </li>
                        </ul>


                        <ul class="nav navbar-nav navbar-right">
                            <li class="visible-xs"><a href="login.html"> <i class="fa fa-lock"></i> Login</a></li>
                            <li class="visible-xs"><a href="register.html"> <i class="fa fa-sign-in"></i> Register</a></li>
                            <li id="cart" class="menubar-cart visible-xs">
                                <a href="cart.html" title="View Cart" class="awemenu-icon menu-shopping-cart">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="cart-number">0</span>
                                </a>
                            </li>
                            <li>
                                <!-- search form -->
                                <form action="{{route('products.search')}}" method="GET" class="form-inline" style="margin: 15px 0 0;">
                                    {{Form::token()}}
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control" placeholder="Search..." value="{{old('name')}}">
                                        <span class="input-group-btn">
                        <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> Search</button>
                    </span>
                                    </div>
                                </form>
                                <!-- /.search form -->
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->                </div>
            </div>
        </nav>
    </header>