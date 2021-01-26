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

@yield('content')


</div>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="{{asset('assets/js/init.js')}}"></script>

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

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

</body>

</html>
