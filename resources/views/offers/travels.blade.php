@extends('layouts.offer_layout')


@section('container')

    <div class="container">


        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Enter Search Term" />
                    <button type="submit" class="btn btn-primary btn-white">Search</button>
                </form>
            </div>
        </div>

        <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
            <div class="section-inner pad-top-200">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mt30 wow text-center">
                            <h2 class="section-heading">Nos voyages organisés</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="welcome">
            <div class="section-inner nopaddingbottom">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"></p>
                            <p> Petit resumé sur les offres voyages...</p>
                            <p class="mt30"><a href="#contact" class="btn btn-primary btn-theme page-scroll">Nos offres Actuelles</a></p>
                        </div>
<!--
                        <div class="col-md-6">
                            <img src="assets/img/isometric-ipad-white.png" class="img-responsive alignright wow fadeIn" data-wow-delay="0.5s" alt="">
                        </div>

                        -->
                    </div>
                </div>

            </div>
        </section>

        <section class="white-bg">
            <div class="section-inner nopadding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9 match-height">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="3" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/pays/tunis.png" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Tunisie</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/pays/morroco.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Maroc</a></h3>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/pays/espagne.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">Espagne</a></h3>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row hover-item">
                                                <div class="col-xs-12">
                                                    <img src="assets/img/pays/france.jpg" class="img-responsive smoothie" alt="">
                                                </div>
                                                <div class="col-xs-12 hover-item-caption smoothie">
                                                    <div class="vertical-center">
                                                        <h3 class="smoothie"><a href="single-portfolio.html" title="view project">France</a></h3>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </div>

@endsection