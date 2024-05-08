<nav class="navbar navbar-expand-lg fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('storage/Obrazky/downhill_biker.jpg')}}" alt="logo containing downhill biker" width="40" 
                    height="40" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Bicykle
                    </a>
                    <div class="dropdown-menu bicykle-dropdown">
                        <ul>
                            <li>
                                <a class="dropdown-item" href="/category/1">HORSKE</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="HORSKE/DOWNHILL_page.html">DOWNHILL</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="HORSKE/ENDURO_page.html">ENDURO</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="HORSKE/TRAIL_page.html">TRAIL</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="HORSKE/XC_page.html">XC</a>
                            </li>
                        </ul>

                        <ul>
                            <li>
                                <a class="dropdown-item" href="/category/2">DAMSKE</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">URBAN</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">CROSS</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a class="dropdown-item" href="/category/3">EBIKE</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">HORSKE</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">URBAN</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a class="dropdown-item" href="/category/4">CESTNE</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">RACING</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">GRAVEL</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <form class="d-flex ms-auto me-auto" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            @auth
                <ul class="navbar-nav mb-2 p mb-lg-0">
                    <li class="nav-item">
                        
                        <form action="logout" method="POST">
                            @csrf
                            <button class="nav-link text-white" type="submit">Odhlasit sa</button>
                        </form>
                    </li>
                </ul>  
            @endauth

            @guest
            <ul class="navbar-nav mb-2 p mb-lg-0">
                <li class="nav-item">
                    {{-- <form action="login" method="POST">
                        @csrf
                        <button class="nav-link text-white" type="submit">Prihlasit sa</button>
                    </form> --}}
                    {{-- @csrf --}}
                    <a class="nav-link text-white" href="login">Prihlásiť sa</a>
                </li>
            </ul>
            @endguest
            
            <a class="navbar-brand" href="Košík_a_Platby/KOSIK.html">
                <img src="{{ asset('storage/Obrazky/cart.jpg') }}" alt="logo containg downhill biker" width="40" 
                        height="40" class="d-inline-block align-text-top">
            </a>
                
        </div>
    </div>
</nav>