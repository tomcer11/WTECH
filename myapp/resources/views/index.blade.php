<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Bike shop - main page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="IE-edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
    
<body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="Obrazky/downhill_biker.jpg" alt="logo containg downhill biker" width="40" 
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
                                        <a class="dropdown-item" href="Vsetky_Kategorie_rozdelenie/HORSKE.html">HORSKE</a>
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
                                        <a class="dropdown-item" href="Vsetky_Kategorie_rozdelenie/DAMSKE.html">DAMSKE</a>
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
                                        <a class="dropdown-item" href="Vsetky_Kategorie_rozdelenie/EBIKE.html">EBIKE</a>
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
                                        <a class="dropdown-item" href="Vsetky_Kategorie_rozdelenie/CESTNE.html">CESTNE</a>
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
                    <ul class="navbar-nav mb-2 p mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="Login_a_Registrácia/LOGIN_page.html">Prihlásiť sa</a>
                        </li>
                    </ul>

                    <a class="navbar-brand" href="Košík_a_Platby/KOSIK.html">
                        <img src="Obrazky/cart.jpg" alt="logo containg downhill biker" width="40" 
                                height="40" class="d-inline-block align-text-top">
                    </a>
                        
                </div>
            </div>
        </nav>
    </header>

    <br>

    <main>

        <section>
            <div class="container pt-5">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item banner active" data-bs-interval="3000">
                            <img src="Obrazky/dalsie/Fall-Biking-Whistler.jpg" class="d-block w-100 X" alt="...">
                            <div class="carousel-caption d-block text-center banner-caption">
                                <h5 class="kategoria banner_popis">Objavte nové horizonty dobrodružstva a slobody na horských terénoch</h5>
                            </div>
                        </div>
                        <div class="carousel-item banner" data-bs-interval="3000">
                            <img src="Obrazky/dalsie/whistler-bike-park.jpg" class="d-block w-100 X" alt="...">
                            <div class="carousel-caption d-block text-center banner-caption">
                                <h5 class="kategoria banner_popis">Objavte nádherné a dobrodružné cesty s našimi trail bike modelmi</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        
        





        <section id="Sales">
            <div class = "container my-5 text-center pt-5">
                <h2 class="display-4"><strong>Ponuka týždňa</strong></h2>
                <p>Zaujimavé ponuky, ktoré sme si pre vás pripravili pre tento týždeň.</p>
                <div class="row justify-content-center align-items-center">
                    <div class="col-9 col-lg-3 mx-3">
                        <div class="p-1">
                            <div class="card" style="width: 18rem;">
                                <img src="Obrazky/enduro/kellys_swag.jpg" class="card-img-top" alt="Logo of kellys">
                                <div class="card-body">
                                        <h5 class="card-title">
                                            <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
                                            href="#">
                                                Kellys bike
                                              </a>
                                        </h5>
                                    
                                  <p class="card-text text-dark display-6 fw-bold">1459€</p>
                                  <a href="#" class="btn btn-danger">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-lg-3 mx-3">
                        <div class="p-1">
                            <div class="card" style="width: 18rem;">
                                <img src="Obrazky/enduro/kellys_swag.jpg" class="card-img-top" alt="Logo of kellys">
                                <div class="card-body">
                                        <h5 class="card-title">
                                            <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
                                            href="#">
                                                Kellys bike
                                              </a>
                                        </h5>
                                    
                                  <p class="card-text text-dark display-6 fw-bold">1459€</p>
                                  <a href="#" class="btn btn-danger">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-lg-3 mx-3">
                        <div class="p-1">
                            <div class="card" style="width: 18rem;">
                                <img src="Obrazky/enduro/kellys_swag.jpg" class="card-img-top" alt="Logo of kellys">
                                <div class="card-body">
                                        <h5 class="card-title">
                                            <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
                                            href="#">
                                                Kellys bike
                                              </a>
                                        </h5>
                                    
                                  <p class="card-text text-dark display-6 fw-bold">1459€</p>
                                  <a href="#" class="btn btn-danger">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="New_items">
            <div class = "container my-5 text-center">
                <h2 class="display-4"><strong>Novinky týždňa</strong></h2>
                <p>Nenechajte si újsť tieto skvelé novinky.</p>
                <div class="row justify-content-center">
                    <div class="col-9 col-lg-3 mx-3">
                        <div class="p-1">
                            <div class="card" style="width: 18rem;">
                                <img src="Obrazky/ebike/kellys_bike.jpg" class="card-img-top" alt="Logo of kellys">
                                <div class="card-body">
                                        <h5 class="card-title">
                                            <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
                                            href="#">
                                                Kellys bike
                                              </a>
                                        </h5>
                                    
                                  <p class="card-text text-dark display-6 fw-bold">1459€</p>
                                  <a href="#" class="btn btn-danger">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-lg-3 mx-3">
                        <div class="p-1">
                            <div class="card" style="width: 18rem;">
                                <img src="Obrazky/ebike/kellys_bike.jpg" class="card-img-top" alt="Logo of kellys">
                                <div class="card-body">
                                        <h5 class="card-title">
                                            <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
                                            href="#">
                                                Kellys bike
                                              </a>
                                        </h5>
                                    
                                  <p class="card-text text-dark display-6 fw-bold">1459€</p>
                                  <a href="#" class="btn btn-danger">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9 col-lg-3 mx-3">
                        <div class="p-1">
                            <div class="card" style="width: 18rem;">
                                <img src="Obrazky/ebike/kellys_bike.jpg" class="card-img-top" alt="Logo of kellys">
                                <div class="card-body">
                                        <h5 class="card-title">
                                            <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
                                            href="#">
                                                Kellys bike
                                              </a>
                                        </h5>
                                    
                                  <p class="card-text text-dark display-6 fw-bold">1459€</p>
                                  <a href="#" class="btn btn-danger">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
        
        </section>

        

        
        
        

    </main>

    <br>

    <footer>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item me-2">
                        <a href="#" class="nav-link text-white">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Contact</a>
                    </li>
                </ul>

                <p class="mt-3 text-white">©2024</p>
            </div>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>

</body>


</html>