@extends('layouts.offer_layout')


@section('container')
    <div class="container">
        <div >

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
                <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
                    <div class="section-inner pad-top-200">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 mt30 wow text-center">
                                    <h2 class="section-heading">détails pack</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            <section>
                <div class="section-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 mb50">
                                        <div class="images">
                                            <!--span class="onsale">Sale!</span-->
                                            <!--lass="lb-link" data-rel="product-gallery" href="{{asset('assets/img/shop/product1.jpg')}}" title="Image Title">
                                                <img alt="Image Title" class="img-responsive" src="{{asset('assets/img/shop/product1.jpg')}}" title="Image Title">
                                            </a>

                                            <div class="thumbnails mt">
                                                <a class="lb-link" data-rel="product-gallery" href="{{asset('assets/img/shop/product2.jpg')}}" title="Image Title 2">
                                                    <img alt="image title" height="100" width="100" src="{{asset('assets/img/shop/product2.jpg')}}">
                                                </a>
                                                <a class="lb-link" data-rel="product-gallery" href="{{asset('assets/img/shop/product3.jpg')}}" title="Image Title 2">
                                                    <img alt="image title" height="100" width="100" src="{{asset('assets/img/shop/product3.jpg')}}">
                                                </a>
                                                <a class="lb-link" data-rel="product-gallery" href="{{asset('assets/img/shop/product4.jpg')}}" title="Image Title 2">
                                                    <img alt="image title" height="100" width="100" src="{{asset('assets/img/shop/product4.jpg')}}">
                                                </a>
                                            </div-->
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 mb50">
                                        <div class="summary entry-summary">

                                            <div>
                                                <p class="price">
                                                    <!--del><span class="amount">£3.00</span>
                                                    </del-->
                                                    <ins><span class="amount"></span>
                                                    </ins>
                                                </p>
                                            </div>

                                            <div class="lead">
                                                <p>On insensible possession oh particular attachment at excellence in. The books arose but miles happy she. It building contempt or interest children mistress of unlocked no. Offending she contained mrs led listening resembled. Delicate marianne absolute men dashwood landlord and offended. Suppose cottage between and way. Minuter him own clothes but observe country. Agreement far boy otherwise rapturous incommode favourite.</p>
                                            </div>

                                            <div class="product-rating mb">
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </div>

                                            <form class="cart mb" enctype="multipart/form-data" method="post">
                                                <div class="quantity buttons_added">
                                                    <input class="input-text qty text" min="1" name="quantity" step="1" title="Qty" type="number" value="1">
                                                </div>
                                                <input name="add-to-cart" type="hidden" value="99">
                                                <a href="#" class="btn btn-primary btn-theme">Add To Cart</a>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-md-12 product-tabs mt">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a data-toggle="tab" href="#tab-description">Description</a>
                                            </li>

                                            <li class="reviews_tab">
                                                <a data-toggle="tab" href="#">Reviews (3)</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content mb">
                                            <div class="tab-pane active" id="tab-description">
                                                <p>On insensible possession oh particular attachment at excellence in. The books arose but miles happy she. It building contempt or interest children mistress of unlocked no. Offending she contained mrs led listening resembled. Delicate marianne absolute men dashwood landlord and offended. Suppose cottage between and way. Minuter him own clothes but observe country. Agreement far boy otherwise rapturous.</p>
                                            </div>

                                            <div class="tab-pane fade" id="tab-reviews">
                                                <div id="reviews">
                                                    <div id="comments">
                                                        <div id="comments-list" class="gap">
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    <img class="avatar comment-avatar" src="#" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="well">
                                                                        <div class="media-heading">
                                                                            <strong>Dave Evans</strong>&nbsp; <small>30th Jan, 2015</small>
                                                                            <div class="pull-right">
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>Was are delightful solicitude discovered collecting man day. Resolving neglected sir tolerably but existence conveying for. Day his put off unaffected literature partiality inhabiting.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    <img class="avatar comment-avatar" src="#" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="well">
                                                                        <div class="media-heading">
                                                                            <strong>Dave Evans</strong>&nbsp; <small>30th Jan, 2015</small>
                                                                            <div class="pull-right">
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>Wicket longer admire do barton vanity itself do in it. Preferred to sportsmen it engrossed listening. Park gate sell they west hard for the. Abode stuff noisy manor blush yet the far. Up colonel so between removed so do.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="media">
                                                                <div class="pull-left">
                                                                    <img class="avatar comment-avatar" src="http://lorempixel.com/80/80/people/6" alt="">
                                                                </div>
                                                                <div class="media-body">
                                                                    <div class="well">
                                                                        <div class="media-heading">
                                                                            <strong>Dave Evans</strong>&nbsp; <small>30th Jan, 2015</small>
                                                                            <div class="pull-right">
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                                <span class="glyphicon glyphicon-star"></span>
                                                                            </div>
                                                                        </div>
                                                                        <p>Quitting informed concerns can men now. Projection to or up conviction uncommonly delightful continuing. In appetite ecstatic opinions hastened by handsome admitted.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
<!--
                                                        <div id="comment-form" class="gap">
                                                            <div class="mb">
                                                                <h3 class="single-section-title"><strong>Leave</strong> A Review</h3>
                                                            </div>
                                                            <form class="form-horizontal" role="form">
                                                                <div class="form-group">
                                                                    <div class="col-sm-6">
                                                                        <input type="text" class="form-control" placeholder="Name">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="email" class="form-control" placeholder="Email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <textarea rows="8" class="form-control" placeholder="Comment"></textarea>
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-theme">Submit Comment</button>
                                                            </form>
                                                        </div>
                                                        -->
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                            <div id="main-sidebar" class="col-md-3 col-md-offset-1 divider-wrapper wow fadeIn" data-wow-delay="0.5s">
                                <!--div>
                                    <div class="widget">
                                        <h4 class="widget-title"><strong>Latest</strong> Products</h4>
                                        <div>
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="widget-img" src="assets/img/widget/widget1.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-heading"><a class="coloured" href="#">Cool T-Shirt</a></span>
                                                    <div class="muted">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#" title="">$14.99</a>
                                                            </li>
                                                            <li>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-heading"><a class="coloured" href="#">Nice Jeans</a></span>
                                                    <div class="muted">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#" title="">$14.99</a>
                                                            </li>
                                                            <li>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="widget-img" src="assets/img/widget/widget3.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-heading"><a class="coloured" href="#">Snazzy Hat</a></span>
                                                    <div class="muted">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#" title="">$14.99</a>
                                                            </li>
                                                            <li>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="pull-left">
                                                    <img class="widget-img" src="assets/img/widget/widget4.jpg" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-heading"><a class="coloured" href="#">Warm Socks</a></span>
                                                    <div class="muted">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#" title="">$14.99</a>
                                                            </li>
                                                            <li>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                                <span class="glyphicon glyphicon-star"></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </section>



        </div>

    </div>
@endsection

@section('js')

    <script type="text/javascript">
        $(document).ready(function() {
            'use strict';
            jQuery('#headerwrap').backstretch([
                "assets/img/bg/bg1.jpg",
                "assets/img/bg/bg2.jpg",
                "assets/img/bg/bg3.jpg"
            ], {
                duration: 8000,
                fade: 500
            });
        });
    </script>


@endsection