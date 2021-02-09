
@extends('layouts.offer_layout')


@section('container')
    <div class="container">
        <div class="master-wrapper">

            <div class="preloader">
                <div class="preloader-img">
                    <span class="loading-animation animate-flicker"><img src="{{asset('assets/img/loading.GIF')}}" alt="loading"/></span>
                </div>
            </div>



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
     <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/bg/bg2.jpg" data-speed="0.7">
        <div class="section-inner pad-top-200">
             <div class="container">
                 <div class="row">
                   <div class="col-lg-12 mt30 wow text-center">
                       <h2 class="section-heading">Sorties et week-ends</h2>
                   </div>
                 </div>
             </div>
        </div>
     </section>

    <section>
        <div class="section-inner">
            <div class="container">
                <div class="row mb50">
                    @foreach($offres as $offer)
                    <div class="col-md-4">
                        <div class="hover-item mb30">
                            <img src="{{ $offer->image_url }}" class="img-responsive smoothie" alt="">
                            <div class="overlay-item-caption smoothie"></div>
                            <div class="hover-item-caption smoothie">
                                <div class="vertical-center smoothie">

                                    <a href="{{route('view_pack') }}" class="smoothie btn btn-primary">View</a>

                                </div>
                            </div>
                        </div>
                        <div class="item-excerpt">
                            <h4 class="pull-right">{{ $offer->price }} DA</h4>
                            <h4><a href="#">{{ $offer->title }}</a></h4>
                            <p>{{ $offer->description }}</p>
                        </div>
                    </div>

                    @endforeach
                    <!--
                    <div class="col-md-4">
                        <div class="hover-item mb30">
                            <img src="assets/img/shop/shop2.jpg" class="img-responsive smoothie" alt="">
                            <div class="overlay-item-caption smoothie"></div>
                            <div class="hover-item-caption smoothie">
                                <div class="vertical-center smoothie">
                                    <a href="#" class="smoothie btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-excerpt">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Slim-Fit Shirt</a></h4>
                            <p>Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-item mb30">
                            <img src="assets/img/shop/shop3.jpg" class="img-responsive smoothie" alt="">
                            <div class="overlay-item-caption smoothie"></div>
                            <div class="hover-item-caption smoothie">
                                <div class="vertical-center smoothie">
                                    <a href="#" class="smoothie btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-excerpt">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Slim-Fit Shirt</a></h4>
                            <p>Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb50">
                    <div class="col-md-4">
                        <div class="hover-item mb30">
                            <img src="assets/img/shop/shop4.jpg" class="img-responsive smoothie" alt="">
                            <div class="overlay-item-caption smoothie"></div>
                            <div class="hover-item-caption smoothie">
                                <div class="vertical-center smoothie">
                                    <a href="#" class="smoothie btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-excerpt">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Slim-Fit Shirt</a></h4>
                            <p>Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-item mb30">
                            <img src="assets/img/shop/shop5.jpg" class="img-responsive smoothie" alt="">
                            <div class="overlay-item-caption smoothie"></div>
                            <div class="hover-item-caption smoothie">
                                <div class="vertical-center smoothie">
                                    <a href="#" class="smoothie btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-excerpt">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Slim-Fit Shirt</a></h4>
                            <p>Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hover-item mb30">
                            <img src="assets/img/shop/shop6.jpg" class="img-responsive smoothie" alt="">
                            <div class="overlay-item-caption smoothie"></div>
                            <div class="hover-item-caption smoothie">
                                <div class="vertical-center smoothie">
                                    <a href="#" class="smoothie btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item-excerpt">
                            <h4 class="pull-right">$24.99</h4>
                            <h4><a href="#">Slim-Fit Shirt</a></h4>
                            <p>Taste oh spoke about no solid of hills up shade. Occasion so bachelor humoured striking by attended doubtful be it.</p>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
    </section>



</div>

<div class="flexpanel">
    <div class="viewport-wrap">
        <div class="viewport">
            <div class="widget mb50">
                <h4 class="widget-title">Latest Articles</h4>
                <div>
                    <div class="media">
                        <div class="pull-left">
                            <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Panic In London</a></span>
                            <small class="muted">Posted 14 April 2015</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">New iPhone News</a></span>
                            <small class="muted">Posted 14 April 2015</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img class="widget-img" src="assets/img/widget/widget3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Our Year In Review</a></span>
                            <small class="muted">Posted 14 April 2015</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img class="widget-img" src="assets/img/widget/widget4.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">jQuery Tutorial</a></span>
                            <small class="muted">Posted 14 April 2015</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img class="widget-img" src="assets/img/widget/widget5.jpg" alt="">
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
    </div>
@section('js')

<script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        jQuery('#headerwrap').backstretch([
            "assets/img/shop/hero1.jpeg",
            "assets/img/shop/hero2.jpg",
            "assets/img/shop/hero3.jpeg"
        ], {
            duration: 8000,
            fade: 500
        });
    });
</script>


@endsection