<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Bike shop - products</title>
    <meta charset="UTF-8">
    
    @include('layout.partials.head')

    <link href="{{ asset('/css/horske.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    
<body>
    <header>
        @include('layout.partials.nav-bar')
    </header>

    <br>
    <main>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-4 col-md-2 py-5" id="filter-bar">
                    <ul class="nav nav-pills flex-column mb-auto  bg-dark">
                        <li class="nav-item pb-3">
                            <h2 class="text-white text-center fs-3">
                                Cena
                            </h2>
                        </li>
                        <li class="nav-item">
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="OD">
                                <input type="number" class="form-control" placeholder="DO">
                            </div>
                        </li>
                        <li class="nav-item pt-5">
                            <h2 class="text-white text-center fs-3">
                                Značka
                            </h2>
                        </li>
                        <li class="nav-item ps-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="Santa_Cruz-checkbox">
                                <label class="form-check-label text-light" for="Santa_Cruz_checkbox">
                                  Santa Cruz
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="Kellys-checkbox">
                                <label class="form-check-label text-light" for="Kellys_checkbox">
                                  Kellys
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="CTM-checkbox">
                                <label class="form-check-label text-light" for="CTM-checkbox">
                                  CTM
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="Lapierre-checkbox">
                                <label class="form-check-label text-light" for="Lapierre-checkbox">
                                  Lapierre
                                </label>
                            </div>
                        </li>
                        <li class="nav-item pt-5">
                            <h2 class="text-white text-center fs-3">
                                Veľkosť rámu
                            </h2>
                        </li>
                        <li class="nav-item text-center">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="size_S-checkbox">
                                    <label class="form-check-label text-light" for="size_S-checkbox">
                                      S
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="size_M-checkbox">
                                    <label class="form-check-label text-light" for="size_M-checkbox">
                                      M
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="size_L-checkbox">
                                    <label class="form-check-label text-light" for="size_L-checkbox">
                                      L
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="size_XL-checkbox">
                                    <label class="form-check-label text-light" for="size_XL-checkbox">
                                      XL
                                    </label>
                                </div>
                        </li>
                        <li class="nav-item pt-5">
                            <h2 class="text-white text-center fs-3">
                                Priemer kolies
                            </h2>
                        </li>
                        <li class="nav-item text-center pb-5">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="size_27.5-checkbox">
                                    <label class="form-check-label text-light" for="size_27.5-checkbox">
                                      27.5
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="size_29-checkbox">
                                    <label class="form-check-label text-light" for="size_29-checkbox">
                                      29
                                    </label>
                                </div>
                        </li>
                        
                    </ul>
                </div>
                

                <div class="col-8 col-md-10 pt-5">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card text-bg-dark">
                                <img src="{{asset('storage/'.$sub_category->banner_path)}}" class="card-img" alt="banner {{ $sub_category->category }}" style="opacity: 25%; height: auto; width: auto;">
                                <div class="card-img-overlay">
                                    <p id="Nadpis">{{ $sub_category->category }}</p>
                                    <br>
                                    <p class="d-none d-md-block" id="Text">{{ $sub_category->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    {{-- <div class="col-9 col-md-5 col-lg-2">
                        <div class="p-1">
                            <div class="card" style="width: 10rem;">
                                <img src="../Obrazky/downhill/mondraker_foxy.jpg" class="card-img-top" alt="Logo of kellys">
                                <div class="card-body text-center">
                                        <h5 class="card-title">
                                            <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" 
                                            href="#">
                                                Mondraker Summum
                                              </a>
                                        </h5>
                                    
                                  <p class="card-text text-dark display-6 fw-bold">1459€</p>
                                  <a href="#" class="btn btn-danger">Buy</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    
                    

                    <div class="row justify-content-end">
                        <div class="col-auto pt-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Usporiadanie produktov
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Od najmenších po najväčšie</a></li>
                                  <li><a class="dropdown-item" href="#">Od najväčších po najmenšie</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    

                    @php
                    $productsCount = count($products);
                    $rowsCount = ceil($productsCount / 4);
                    $productsLeft = $productsCount;
                    $startIndex = 0;
                    @endphp


                    @for ($i = 0; $i < $rowsCount; $i++)
                    <div class="row g-0 justify-content-between pt-5">
                        @php
                        $productsInRow = min(4, $productsLeft);
                        $productsLeft -= $productsInRow;
                        @endphp

                        @for ($j = 0; $j < $productsInRow; $j++)
                        <div class="col-9 col-md-5 col-lg-2">
                            <div class="p-1">
                                <div class="card" style="width: 10rem;">
                                    <img src="{{ asset('storage/'.$products[$startIndex + $j]->images[0]->name) }}" class="card-img-top" alt="{{ $products[$startIndex + $j]->model }}">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">
                                            <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                href="{{url('category/'.$products[$startIndex + $j]->main_category_id.'/sub-category/'.$sub_category->id.'/detail/'.$products[$startIndex + $j]->id)}}">
                                                {{ $products[$startIndex + $j]->producer }} {{ $products[$startIndex + $j]->model }}
                                            </a>
                                        </h5>
                                        <p class="card-text text-dark display-6 fw-bold">{{ $products[$startIndex + $j]->price }}</p>
                                        <a href="{{url('category/'.$products[$startIndex + $j]->main_category_id.'/sub-category/'.$sub_category->id.'/detail/'.$products[$startIndex + $j]->id)}}" class="btn btn-danger">Buy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor

                        @php $startIndex += 4; @endphp
                    </div>
                    @endfor


                    <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    @for ($i = 1; $i <= $rowsCount; $i++)
                                    <li class="page-item"><a class="page-link" href="#">{{ $i }}</a></li>
                                    @endfor
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    
                    
                    {{-- <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                    </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                    </a>
                                  </li>
                                </ul>
                            </nav>
                        </div>
                    </div> --}}
                
                </div>
            </div>
        </div>
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