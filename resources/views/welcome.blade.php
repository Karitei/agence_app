@extends('layouts.default')


@section('content')

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="{{asset('assets/img/loading.GIF')}}" alt="loading"/></span>
            </div>
        </div>

        <!-- Navigation -->


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
                                            <h3 class="smoothie mb30"><a href="#" title="view project">Pack exemple 3</a></h3>
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
                        <!--
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
-->
                        <div class="col-md-12 text-right match-height">
                            <div class="vertical-center">
                                <span class="copyright">Copyright 2020. Designed by H.saraH</span>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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