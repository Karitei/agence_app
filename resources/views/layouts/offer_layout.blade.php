<!DOCTYPE html>
<html lang="en">

@include('layouts.head_default')

<body id="page-top" class="index">

<div class="master-wrapper">

    <div class="preloader">
        <div class="preloader-img">
            <span class="loading-animation animate-flicker"><img src="{{asset('assets/img/loading.GIF')}}" alt="loading"/></span>
        </div>
    </div>

    <!-- Navigation -->
    @include('core.navbar_default')


    @yield('container')

    @include('core.footer_default')

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
                            <small class="muted">Posted 14 April 2019</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img class="widget-img" src="assets/img/widget/widget2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">New iPhone News</a></span>
                            <small class="muted">Posted 14 April 2019</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img class="widget-img" src="assets/img/widget/widget3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Our Year In Review</a></span>
                            <small class="muted">Posted 14 April 2019</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img class="widget-img" src="assets/img/widget/widget4.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">jQuery Tutorial</a></span>
                            <small class="muted">Posted 14 April 2019</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img class="widget-img" src="assets/img/widget/widget5.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Sheen Interview</a></span>
                            <small class="muted">Posted 14 April 2019</small>
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

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/js/init.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</body>

</html>
