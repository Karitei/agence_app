@extends('layouts.default')


@section('content')

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="assets/img/loading.GIF" alt="loading"/></span>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top fadeInDown" data-wow-delay="0.5s">
            <div class="top-bar smoothie hidden-xs">
                <div class="container">
                    <div class="clearfix">
                        <ul class="list-inline social-links wow pull-left">
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>

                        <div class="pull-right text-right">
                            <ul class="list-inline">
                                <li>
                                    <div><i class="fa fa-envelope-o"></i> email@domain.com</div>
                                </li>
                                <li>
                                    <div class="meta-item"><i class="fa fa-mobile"></i> +44 8780 648 605</div>
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
                    <a class="navbar-brand smoothie logo logo-light" href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
                    <a class="navbar-brand smoothie logo logo-dark" href="index.html"><img src="assets/img/logo_reverse.png" alt="logo"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="{{route('home')}}">Home</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Voir les packs <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="header-1.html">Agences</a></li>
                                <li><a href="header-2.html">Entreprises</a></li>

                            </ul>
                        </li>
                        <!--li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Footers <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="footer-1.html">Footer 1</a></li>
                                <li><a href="footer-2.html">Footer 2</a></li>
                                <li><a href="footer-3.html">Footer 3</a></li>
                                <li><a href="footer-4.html">Footer 4</a></li>
                                <li><a href="footer-5.html">Footer 5</a></li>
                                <li><a href="footer-6.html">Footer 6</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - About Us</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about-us-1.html">About Us - Layout 1</a></li>
                                        <li><a href="about-us-2.html">About Us - Layout 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - Services</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services-1.html">Services - Layout 1</a></li>
                                        <li><a href="services-2.html">Services - Layout 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages - Contact</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="contact-us-1.html">Contact - Layout 1</a></li>
                                        <li><a href="contact-us-2.html">Contact - Layout 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="404.html">Pages - 404</a></li>
                            </ul>
                        </li>
                        <li-- class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <span class="pe-7s-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Grid</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-grid-4col.html">Full Grid - 4 Columns</a></li>
                                        <li><a href="portfolio-full-grid-3col.html">Full Grid - 3 Columns</a></li>
                                        <li><a href="portfolio-full-grid-2col.html">Full Grid - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Grid</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-boxed-grid-4col.html">Boxed Grid - 4 Columns</a></li>
                                        <li><a href="portfolio-boxed-grid-3col.html">Boxed Grid - 3 Columns</a></li>
                                        <li><a href="portfolio-boxed-grid-2col.html">Boxed Grid - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Full Masonry</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-full-masonry-4col.html">Full Masonry - 4 Columns</a></li>
                                        <li><a href="portfolio-full-masonry-3col.html">Full Masonry - 3 Columns</a></li>
                                        <li><a href="portfolio-full-masonry-2col.html">Full Masonry - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio - Boxed Masonry</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="portfolio-boxed-masonry-4col.html">Boxed Masonry - 4 Columns</a></li>
                                        <li><a href="portfolio-boxed-masonry-3col.html">Boxed Masonry - 3 Columns</a></li>
                                        <li><a href="portfolio-boxed-masonry-2col.html">Boxed Masonry - 2 Columns</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Single Portfolio</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="single-portfolio-slider.html">Single Portfolio - Slider</a></li>
                                        <li><a href="single-portfolio-carousel.html">Single Portfolio - Carousel</a></li>
                                        <li><a href="single-portfolio-video.html">Single Portfolio - Video</a></li>
                                        <li><a href="single-portfolio-fullscreen-slider.html">Single Portfolio - Fullscreen Slider</a></li>
                                        <li><a href="single-portfolio-fullscreen-video.html">Single Portfolio - Fullscreen Video</a></li>
                                        <li><a href="single-portfolio-image-list.html">Single Portfolio - Image List</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li-->
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
                        <li class="dropdown">
                            <a href="{{route('dashboard')}}">Se connecter</a>

                        </li>
                        <li><a href="#search"><i class="pe-7s-search"></i></a></li>
                        <li><a href="javascript:void(0);" class="side-menu-trigger hidden-xs"><i class="fa fa-bars"></i></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Enter Search Term" />
                    <button type="submit" class="btn btn-primary btn-white">Search</button>
                </form>
            </div>
        </div>

        <!-- Header -->
        <header id="headerwrap" class="dark-wrapper backstretched special-max-height no-overlay">
            <div class="container vertical-center">
                <div class="intro-text vertical-center text-left smoothie">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.2s">Bienvenu chez 'Agence'</div>
                    <div class="intro-sub-heading wow fadeIn secondary-font" data-wow-delay="0.4s">Checker nos offres <span class="rotate">agences, entreprises, particuliers</span></div>
                </div>
            </div>
        </header>

        <section class="white-bg">
            <div class="section-inner masonry-portfolio container demo-selector" data-masonry-cols="4">
                <div>
                    <div>
                        <ul class="masonry-portfolio-items isotope list-unstyled">
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{asset('assets/img/homepages/agency-1.jpg')}}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-agency-1.html" title="view project"> 2</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{asset('assets/img/homepages/blog-2.jpg')}}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-blog-2.html" title="view project">Pack exemple 3</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{asset('assets/img/homepages/corporate-1.jpg')}}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-corporate-1.html" title="view project">Pack exemple 1</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{ asset('assets/img/homepages/landing-2.jpg') }}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-landing-2.html" title="view project">Pack exemple 4</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-sm-3 col-xs-6 masonry-portfolio-item apps isotope-item mb30">
                                <div class="hover-item">
                                    <img src="{{asset('assets/img/homepages/portfolio-1.jpg')}}" class="img-responsive smoothie" alt="">
                                    <div class="overlay-item-caption smoothie"></div>
                                    <div class="hover-item-caption smoothie">
                                        <div class="vertical-center smoothie">
                                            <h3 class="smoothie mb30"><a href="index-portfoio-1.html" title="view project">Pack exemple</a></h3>
                                            <a href="index-agency-1.html" class="smoothie btn btn-primary">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div id="footer-wrapper" class="footer-image-bg">
            <section class="transparent-wrapper">
                <div class="section-inner">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="widget">
                                    <h4 class="widget-title"><strong>Articles</strong> </h4>
                                    <div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="widget-img" src="{{asset('assets/img/widget/widget1.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="media-heading"><a href="#">Blog Post A</a></span>
                                                <small class="muted">Posted 14 April 2015</small>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="widget-img" src="{{asset('assets/img/widget/widget2.jpg')}}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <span class="media-heading"><a href="#">Blog Post B</a></span>
                                                <small class="muted">Posted 14 April 2015</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget about-us-widget">
                                    <h4 class="widget-title"><strong>A</strong> propos</h4>
                                    <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre
                                        provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte
                                        dès qu'il est prêt ou que la mise en page est achevée.
                                        Généralement, on utilise un texte en faux latin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="white-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left match-height">
                            <ul class="list-inline social-links wow">
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-12 text-right match-height">
                            <div class="vertical-center">
                                <span class="copyright">Copyright 2020. Designed by H.saraH</span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <div class="flexpanel">
        <div class="viewport-wrap">
            <div class="viewport">
                <div class="widget mb50">
                    <h4 class="widget-title">Articles</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="{{asset('assets/img/widget/widget1.jpg')}}" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Panic In London</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="{{asset('assets/img/widget/widget2.jpg')}}" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">New iPhone News</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="{{asset('assets/img/widget/widget3.jpg')}}" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Our Year In Review</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="{{asset('assets/img/widget/widget4.jpg')}}" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">jQuery Tutorial</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <img class="widget-img" src="{{asset('assets/img/widget/widget5.jpg')}}" alt="">
                            </div>
                            <div class="media-body">
                                <span class="media-heading"><a href="#">Sheen Interview</a></span>
                                <small class="muted">Posted 14 April 2015</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget mb50">
                    <h4 class="widget-title"><strong>Latest</strong> Articles</h4>
                    <div class="tagcloud">
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Local</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Business</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Media</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Photogtraphy</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Aid</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Fashion</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">News</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Cars</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Global Affairs</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Music</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">Downloads</a>
                        <a href="#" class="tag-link btn btn-theme btn-xs" title="3 topics">MP3</a>
                    </div>
                </div>
                <div class="widget about-us-widget mb50">
                    <h4 class="widget-title">About Kompleet</h4>
                    <p>Professionally monetize team building materials for 24/7 results. Holisticly transition corporate platforms vis-a-vis cutting-edge experiences. Dynamically strategize ubiquitous applications for premier initiatives. Interactively seize resource sucking niche markets.</p>
                </div>
            </div>
        </div>
    </div>


@endsection