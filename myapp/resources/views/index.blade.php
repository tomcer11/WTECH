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
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
</head>
    
<body>

    <header>
        <x-nav-bar />
    </header>

    <br>

    <main>

        <section>
            <div class="container pt-5">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item banner active" data-bs-interval="3000">
                            <img src="{{ asset('storage/Obrazky/dalsie/Fall-Biking-Whistler.jpg') }}" class="d-block w-100 X" alt="...">
                            <div class="carousel-caption d-block text-center banner-caption">
                                <h5 class="kategoria banner_popis">Objavte nové horizonty dobrodružstva a slobody na horských terénoch</h5>
                            </div>
                        </div>
                        <div class="carousel-item banner" data-bs-interval="3000">
                            <img src="{{ asset('storage/Obrazky/dalsie/whistler-bike-park.jpg') }}" class="d-block w-100 X" alt="...">
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
                    @for ($i = 0; $i < 3; $i++)
                        <x-product-card name="Produkt" price="1500" 
                        photoPath="{{asset('storage/Obrazky/downhill_biker')}}" altText="Biker"/>
                    @endfor  
                </div>
            </div>
        </section>

        <section id="New_items">
            <div class = "container my-5 text-center">
                <h2 class="display-4"><strong>Novinky týždňa</strong></h2>
                <p>Nenechajte si újsť tieto skvelé novinky.</p>
                <div class="row justify-content-center">
                    @for ($i = 0; $i < 3; $i++)
                        <x-product-card name="Produkt" price="1500" 
                        photoPath="{{asset('storage/Obrazky/downhill_biker')}}" altText="Biker" />
                    @endfor 
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