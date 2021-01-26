<nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
    <div class="top-bar smoothie hidden-xs">
        <div class="container">

            <div class="clearfix">

                <div class="pull-right text-right">
                    <ul class="list-inline">
                        <li>
                            <div><i class="fa fa-envelope-o"></i> email@domain.com</div>
                        </li>
                        <li>
                            <div class="meta-item"><i class="fa fa-mobile"></i> +213 55 55 55 55</div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--
            <a class="navbar-brand smoothie logo logo-light" href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            <a class="navbar-brand smoothie logo logo-dark" href="index.html"><img src="assets/img/logo_reverse.png" alt="logo"></a>
            -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="{{route('welcome')}}">Acceuil</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Offres<span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('travels') }}">Voyages Organisés</a></li>
                        <li><a href="{{ route('journey') }}">Sorties et Week-ends</a></li>
                        <li><a href="header-2.html"></a></li>

                    </ul>
                </li>
            <!--
                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="pe-7s-angle-down"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog Feeds</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-grid-2col.html">Blog Grid - 2 Column</a></li>
                                <li><a href="blog-grid-3col.html">Blog Grid - 3 Column</a></li>
                                <li><a href="blog-grid-2col-sidebar.html">Blog Grid - 2 Column Sidebar</a></li>
                                <li><a href="blog-grid-3col-sidebar.html">Blog Grid - 3 Column Sidebar</a></li>
                                <li><a href="blog-traditional.html">Blog Traditional</a></li>
                                <li><a href="blog-traditional-sidebar.html">Blog Traditional Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Posts</a>
                            <ul class="dropdown-menu">
                                <li><a href="single-post-fullwidth.html">Single Post - Full Width</a></li>
                                <li><a href="single-post-thin.html">Single Post - Thin</a></li>
                                <li><a href="single-post-left-sidebar.html">Single Post - Left Sidebar</a></li>
                                <li><a href="single-post-right-sidebar.html">Single Post - Right Sidebar</a></li>


                            </ul>
                        </li>
                    </ul>
                </li>
                -->
                <li class="dropdown">
                    <a href="{{route('login')}}">Se connecter</a>
                </li>
                <li class="dropdown">
                    <a href="{{route('register')}}">S'enregistrer</a>
                </li>
                <!--
                <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                <li><a href="javascript:void(0);" class="side-menu-trigger hidden-xs"><i class="fa fa-bars"></i></a></li>
                -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>