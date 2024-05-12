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
                        <form id="filterForm" method="GET" action="{{ url('/category/'.$sub_category->main_category_id.'/sub-category/'.$sub_category->id) }}">
                            <input type="hidden" name="bar" value="true">
                            <input type="hidden" name="sort" value="{{ $sort }}">
                            @if(count($errors) > 0)
                                @foreach( $errors->all() as $message )
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    {{$message}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endforeach
                            @endif
                            <li class="nav-item pb-3">
                                <h2 class="text-white text-center fs-3">
                                    Cena
                                </h2>
                            </li>
                            <li class="nav-item">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="price_from" value="{{ $priceFrom ?? '' }}" placeholder="OD">
                                    <input type="number" class="form-control" name="price_to" value="{{ $priceTo ?? '' }}" placeholder="DO">
                                </div>
                            </li>
                            
                            <li class="nav-item pt-5">
                                <h2 class="text-white text-center fs-3">
                                    Značka
                                </h2>
                            </li>
                            <li class="nav-item ps-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Santa Cruz" name="brands[]" @if(in_array('Santa Cruz', session('selectedBrands', []))) checked @endif id="Santa_Cruz-checkbox">
                                    <label class="form-check-label text-light" for="Santa_Cruz_checkbox">Santa Cruz</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Pivot" name="brands[]" @if(in_array('Pivot', session('selectedBrands', []))) checked @endif id="Pivot-checkbox">
                                    <label class="form-check-label text-light" for="Pivot_checkbox">Pivot</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Kellys" name="brands[]" @if(in_array('Kellys', session('selectedBrands', []))) checked @endif id="Kellys-checkbox">
                                    <label class="form-check-label text-light" for="Kellys_checkbox">Kellys</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Mondraker" name="brands[]" @if(in_array('Mondraker', session('selectedBrands', []))) checked @endif id="Mondraker-checkbox">
                                    <label class="form-check-label text-light" for="Mondraker_checkbox">Mondraker</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="CTM" name="brands[]" @if(in_array('CTM', session('selectedBrands', []))) checked @endif id="CTM-checkbox">
                                    <label class="form-check-label text-light" for="CTM_checkbox">CTM</label>
                                </div>
                            </li>


                            <li class="nav-item pt-5">
                                <h2 class="text-white text-center fs-3">
                                    Veľkosť rámu
                                </h2>
                            </li>
                            <li class="nav-item text-center">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="S" name="sizes[]" @if(in_array('S', session('selectedSizes', []))) checked @endif id="size_S-checkbox">
                                    <label class="form-check-label text-light" for="size_S-checkbox">S</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="M" name="sizes[]" @if(in_array('M', session('selectedSizes', []))) checked @endif id="size_M-checkbox">
                                    <label class="form-check-label text-light" for="size_M-checkbox">M</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="L" name="sizes[]" @if(in_array('L', session('selectedSizes', []))) checked @endif id="size_L-checkbox">
                                    <label class="form-check-label text-light" for="size_L-checkbox"> L</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="XL" name="sizes[]" @if(in_array('XL', session('selectedSizes', []))) checked @endif id="size_XL-checkbox">
                                    <label class="form-check-label text-light" for="size_XL-checkbox">XL</label>
                                </div>
                            </li>
                            <li class="nav-item pt-5">
                                <h2 class="text-white text-center fs-3">
                                    Priemer kolies
                                </h2>
                            </li>
                            <li class="nav-item text-center pb-5">
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="27.5" name="wheels[]" @if(in_array('27.5', session('selectedWheels', []))) checked @endif id="size_27.5-checkbox">
                                    <label class="form-check-label text-light" for="size_27.5-checkbox">27.5</label>
                                </div>
                                <div class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="29" name="wheels[]" @if(in_array('29', session('selectedWheels', []))) checked @endif id="size_29-checkbox">
                                    <label class="form-check-label text-light" for="size_29-checkbox">29</label>
                                </div>
                            </li>
                            
                            
                            <!-- Tlačidlo na odoslanie formulára -->
                            <div class="row justify-content-center mt-3">
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Filtrovať</button>
                                </div>
                            </div>
                            

                        </form>
                        
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
                    


                    <div class="row justify-content-end">
                        <div class="col-auto pt-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $sort === 'asc' ? 'Od najlacnejších' : ($sort === 'desc' ? 'Od najdrahších' : 'Odporúčané') }}
                                </button>
                                <ul class="dropdown-menu">
                                    @if ($sort !== 'asc')
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/category/'.$sub_category->main_category_id.'/sub-category/'.$sub_category->id.'?sort=asc')}}">Od najlacnejších</a>
                                        </li>
                                    @endif
                                    @if ($sort !== 'desc')
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/category/'.$sub_category->main_category_id.'/sub-category/'.$sub_category->id.'?sort=desc')}}">Od najdrahších</a>
                                        </li>
                                    @endif
                                    @if ($sort !== 'none')
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/category/'.$sub_category->main_category_id.'/sub-category/'.$sub_category->id.'?sort=none')}}">Odporúčané</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    @foreach ($products->chunk(4) as $row)
                        <div class="row g-0 pt-5">
                            @foreach ($row as $product)
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                                    <div class="p-1">
                                        <div class="card" style="width: 10rem;">
                                            <img src="{{ asset('storage/'.$product->images[0]->name) }}" class="card-img-top" alt="{{ $product->model }}">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">
                                                    <a class="link-dark link-danger-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                                        href="{{url('category/'.$product->main_category_id.'/sub-category/'.$sub_category->id.'/detail/'.$product->id)}}">
                                                        {{ $product->producer }} {{ $product->model }}
                                                    </a>
                                                </h5>
                                                <p class="card-text text-dark display-6 fw-bold">{{ $product->price }}€</p>
                                                <a href="{{url('category/'.$product->main_category_id.'/sub-category/'.$sub_category->id.'/detail/'.$product->id)}}" class="btn btn-danger">Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach


                    {{-- {{ $products->links() }} --}}

                    <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $products->previousPageUrl() . ($sort && $products->currentPage() > 1 ? '&sort=' . $sort : 'none')}}" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    @for ($i = 1; $i <= $products->lastPage(); $i++)
                                        <li class="page-item">
                                            <a class="page-link @if ($i == $products->currentPage()) active-page @endif" href="{{ $products->url($i) . ($sort ? '&sort=' . $sort : 'none')}}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $products->nextPageUrl() . ($sort && $products->hasMorePages() ? '&sort=' . $sort : 'none')}}" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </main>

    <br>

    @include('layout.partials.footer')
    
    @include('layout.partials.script')

    <script src="{{ asset('js/filters.js') }}"></script>


</body>


</html>