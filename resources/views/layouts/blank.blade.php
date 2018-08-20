

<body>

<!-- Main navbar -->

<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">




        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown language-switch">
                <a href="">
                    <img height=35px; src="{{--/images/{{isset($user->photo)?$user->photo['file']:"has no photo"}}--}}" class="position-left img-circle img-sm" alt="">

                </a>


            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="visible-xs-inline-block position-right">Messages</span>
                    <span class="badge bg-warning-400">2</span>
                </a>

                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        Messages
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-compose"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body">
                        <li class="media">
                            <div class="media-left">
                                <img src="assets/images/demo/users/face10.jpg" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">5</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">James Alexander</span>
                                    <span class="media-annotation pull-right">04:58</span>
                                </a>

                                <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img src="assets/images/demo/users/face3.jpg" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">4</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Margo Baker</span>
                                    <span class="media-annotation pull-right">12:16</span>
                                </a>

                                <span class="text-muted">That was something he was unable to do because...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/demo/users/face24.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Jeremy Victorino</span>
                                    <span class="media-annotation pull-right">22:48</span>
                                </a>

                                <span class="text-muted">But that would be extremely strained and suspicious...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/demo/users/face4.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Beatrix Diaz</span>
                                    <span class="media-annotation pull-right">Tue</span>
                                </a>

                                <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/demo/users/face25.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">Richard Vango</span>
                                    <span class="media-annotation pull-right">Mon</span>
                                </a>

                                <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/images/demo/users/face11.jpg" alt="">


                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">

                    <li><a href="{{route('wishlist.index')}}"><span class="badge bg-teal-400 pull-right">{{Cart::instance('wishList')->count()}}</span> <i class="icon-user-plus"></i>Wishlist</a></li>
                    <li><a href="{{route('cart.index')}}"><span class="badge bg-teal-400 pull-right">{{Cart::instance('default')->count()}}</span> <i class="glyphicon glyphicon-shopping-cart"></i>Shopping Cart</a></li>
                    <li><a href="{{route('products.index')}}"><span class="badge bg-teal-400 pull-right">{{Auth::user()->product->count()}}</span> <i class="icon-comment-discussion"></i> Products</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="{{url('/logout')}}"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->

@yield('styles')
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User1 menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">

                            <div class="media-body">
                                <span class="media-heading text-semibold">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> {{{ isset(Auth::user()->name) ? Auth::user()->role['name'] : Auth::user()->email }}}
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="#"><i class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                            <li class="active"><a href="http://www.codehacking.com/admin/users"><i class="icon-home4"></i> <span>Dashboard</span></a></li>




                            <li>
                                <a href="#"><i class="icon-footprint"></i> <span>Tickets</span></a>
                                <ul>
                                    <li><a href="{{--{{route('tickets.index')}}--}}">List Ticket</a></li>
                                    <li><a href="{{--{{route('tickets.create')}}--}}">Create Ticket</a></li>
                                    <li><a href="wizard_stepy.html"></a></li>
                                </ul>
                            </li>


                            <!-- /forms -->

                            <!-- Appearance -->





















                            <!-- /page kits -->

                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-default">
                <div class="page-header-content">
                    <div class="page-title">
                        <h4><i class="icon-arrow-left52 position-left"></i> Welcome <span class="text-bold">{{isset(Auth::user()->name)? Auth::user()->name:''}}</span></h4>
                    </div>


                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a href="index.html"><i class="icon-home2 position-left"></i> Welcome</a></li>
                        <li class="active"></li>
                    </ul>


                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
        @yield('scripts')

        @yield('content')
        <!-- Main charts -->


            <!-- Traffic sources -->


            <!-- /traffic sources -->



            <!-- Sales stats -->

            <!-- /main charts -->

            <!-- /sales stats -->



            <!-- Dashboard content -->


            <!-- Marketing campaigns -->

            <!-- /marketing campaigns -->


            <!-- Quick stats boxes -->

            <!-- /members online -->


            <!-- Current server load -->

            <!-- /current server load -->


            <!-- Today's revenue -->

            <!-- /today's revenue -->

            <!-- /quick stats boxes -->


            <!-- Support tickets -->

            <!-- /support tickets -->


            <!-- Latest posts -->

            <!-- /latest posts -->


            <!-- Progress counters -->

            <!-- Available hours -->

            <!-- /available hours -->



            <!-- Productivity goal -->

            <!-- /productivity goal -->

            <!-- /progress counters -->


            <!-- Daily sales -->

            <!-- /daily sales -->


            <!-- My messages -->

            <!-- /numbers -->


            <!-- Area chart -->

            <!-- /area chart -->


            <!-- Tabs -->

            <!-- /tabs -->


            <!-- Tabs content -->

            <!-- /tabs content -->


            <!-- /my messages -->


            <!-- Daily financials -->

            <!-- /daily financials -->


            <!-- /dashboard content -->



        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->



</body>