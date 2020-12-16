<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard v1 | Gull Admin Template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="../../dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="../../dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
</head>

<body class="text-left">
<div class="app-admin-wrap layout-sidebar-large">
    <div class="main-header">
        @include('core.topbar')
    </div>

@include('core.leftmenu')

<!-- =============== Left side End ================-->

    <div class="main-content-wrap sidenav-open d-flex flex-column">
@yield('content')

    </div>
<!-- ============ Search UI End ============= -->
@include('core.js')

</body>
</html>