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
        <div class="container">
            <div class="row flex-nowrap">
                <div class="col-12 col-md-12 pt-5">
                    <h2>Nájdené produkty</h2>
                    <div class="row justify-content-left">
                        <div class="col-auto pt-2">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $sort === 'asc' ? 'Od najlacnejších' : ($sort === 'desc' ? 'Od najdrahších' : 'Odporúčané') }}
                                </button>
                                <ul class="dropdown-menu">
                                    @if ($sort !== 'asc')
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/search?sort=asc')}}">Od najlacnejších</a>
                                        </li>
                                    @endif
                                    @if ($sort !== 'desc')
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/search?sort=desc')}}">Od najdrahších</a>
                                        </li>
                                    @endif
                                    @if ($sort !== 'none')
                                        <li>
                                            <a class="dropdown-item" href="{{ url('/search?sort=none')}}">Odporúčané</a>
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
                                                        href="{{url('category/'.$product->main_category_id.'/sub-category/'.$product->sub_category_id.'/detail/'.$product->id)}}">
                                                        {{ $product->producer }} {{ $product->model }}
                                                    </a>
                                                </h5>
                                                <p class="card-text text-dark display-6 fw-bold">{{ $product->price }}</p>
                                                <a href="{{url('category/'.$product->main_category_id.'/sub-category/'.$product->sub_category_id.'/detail/'.$product->id)}}" class="btn btn-danger">Buy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                
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