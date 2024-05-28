<header>
    <div id="header" class="container">
        <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Logo">
        <div id="main-menu">
            <nav class="navbar-nav container navbar.light">
                <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}" href="{{route('home')}}">
                            Home
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="jumbo"></div>
</header>