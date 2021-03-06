<div class="logo">
    <img src="{{ asset('dist-assets/images/logo.png') }}" alt="">
</div>
<div class="menu-toggle">
    <div></div>
    <div></div>
    <div></div>
</div>
<div class="d-flex align-items-center">

</div>
<div style="margin: auto"></div>
<div class="header-part-right">
    <!-- Full screen toggle -->
    <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>


    <!-- User avatar dropdown -->
    <div class="dropdown">
        <div class="user col align-self-end">
            <img src="{{  Auth::user()->avatar_path}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <div class="dropdown-header">
                    <i class="i-Lock-User mr-1"></i>
                    {{ Auth::user()->name }}
                </div>
                <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                <a class="dropdown-item">panier</a>
                <a class="dropdown-item" href="{{ route('logout') }}" >Sign out</a>
            </div>
        </div>
    </div>
</div>