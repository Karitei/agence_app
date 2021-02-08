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