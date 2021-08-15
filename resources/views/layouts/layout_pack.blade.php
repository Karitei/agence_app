<!DOCTYPE html>
<html lang="en">

@include('layouts.head_default')

<body id="page-top" class="index">

<div class="master-wrapper">


@include('core.navbar_default')

@yield('container')

</div>

@include('core.footer_default')



@include('core.js')

@yield('js')

</body>

</html>
