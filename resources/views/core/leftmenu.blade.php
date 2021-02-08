<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item" >
                <a href="{{ route('dashboard') }}" class="nav-item-hold" >
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">Tableau de bord</span>
                </a>
            </li>
            <li class="nav-item" >
                <a class="nav-item-hold" href="{{route('welcome')}}">
                    <i class="nav-icon i-Library"></i>
                    <span class="nav-text">Acceuil</span>
                </a>
            </li>

            <li class="nav-item" >
                <a class="nav-item-hold" href="{{route('offers_list')}}">
                    <i class="nav-icon i-Suitcase"></i>
                    <span class="nav-text">Offres</span></a>
                <div class="triangle"></div>
            </li>
            @if(Auth::user()->role == "0")
            <li class="nav-item" >
                <a class="nav-item-hold" href="{{ route('users_list') }}">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">Utilisateurs</span>
                </a>
            </li>
            @endif

        </ul>
    </div>



    <div class="sidebar-overlay"></div>
</div>