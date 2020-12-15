<div class="container-fluid">
    <div class="topnav" style="height:20vh">
        <div class="navbar-header">
            <a href="{{ url('/') }}" class="navbar-brand">Kelana</a>
        </div>
        <div>
            <ul class="nav navbar-nav nav navbar-right">

                <li data-toggle="modal">
                    <a class="navbar-link" href="{{ url('/Recommender') }}">Recommender</a>
                </li>
                <li data-toggle="modal">
                    <a class="navbar-link" href="{{ url('/hiburan') }}"> Hiburan</a>
                </li>
                @if (Auth::check())
                <li class="navbar-item dropdown">


                    <a class="navbar-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}▾
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/profile') }}">Edit Profil</a>
                        @if(Auth::user()->status=='admin')
                        <a class="dropdown-item" href="{{ url('/admin') }}">Admin</a>
                        @endif
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                    </div>
                    @else
                </li>
                @if(Route::has('register'))
                <li data-toggle="modal" data-target="#mylogin"><a style="cursor: pointer;">Login</a></li>
                @endif
                @endif

            </ul>
        </div>
    </div>
</div>