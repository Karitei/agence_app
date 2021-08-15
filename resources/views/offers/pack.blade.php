@extends('layouts.layout_pack')


@section('container')

    <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg2.jpg')}}" data-speed="0.7">
        <div class="section-inner pad-top-200">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt30 wow text-center">
                        <h2 class="section-heading">Single Product</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 ">
                                <div class="images">
                                    <a class="lb-link" data-rel="product-gallery" href="assets/img/shop/product1.jpg" title="Image Title">
                                        <img alt="Image Title" class="img-responsive" src="assets/img/shop/product1.jpg" title="Image Title">
                                    </a>

                                    <div class="thumbnails mt">
                                        <a class="lb-link" data-rel="product-gallery" href="assets/img/shop/product2.jpg" title="Image Title 2">
                                            <img alt="image title" height="100" width="100" src="assets/img/shop/product2.jpg">
                                        </a>
                                        <a class="lb-link" data-rel="product-gallery" href="assets/img/shop/product3.jpg" title="Image Title 2">
                                            <img alt="image title" height="100" width="100" src="assets/img/shop/product3.jpg">
                                        </a>
                                        <a class="lb-link" data-rel="product-gallery" href="assets/img/shop/product4.jpg" title="Image Title 2">
                                            <img alt="image title" height="100" width="100" src="assets/img/shop/product4.jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 mb50">
                                <div class="summary entry-summary">

                                    <div>
                                        <p class="price">
                                            <!--del><span class="amount">£3.00</span>
                                            </del-->
                                            <ins><span class="amount">{{$offer->price}} DA</span>
                                            </ins>
                                        </p>
                                    </div>

                                    <div class="lead">

                                       {{ $offer->title }}
                                    </div>



                                    <form class="cart mb" enctype="multipart/form-data" method="post">
                                        <div class="quantity buttons_added">
                                            <input class="input-text qty text" min="1" name="quantity" step="1" title="Qty" type="number" value="1">
                                        </div>
                                        <input name="add-to-cart" type="hidden" value="99">
                                        <a href="{{route('inscription_pack', $offer->id)}}" class="btn btn-primary btn-theme">S'inscrire au programme</a>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-12 product-tabs mt">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" href="#tab-description">Description</a>
                                    </li>

                                    <li class="reviews_tab">
                                        <a data-toggle="tab" href="#tab-reviews">Autres..</a>
                                    </li>
                                </ul>

                                <div class="tab-content mb">
                                    <div class="tab-pane active" id="tab-description">
                                        <p>{{ $offer->description }}</p>
                                    </div>

                                    <div class="tab-pane fade" id="tab-reviews">
                                        <div id="reviews">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




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