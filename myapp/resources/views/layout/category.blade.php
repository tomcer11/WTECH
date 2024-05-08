<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Bike shop - products</title>
    <meta charset="UTF-8">
    
    @include('layout.partials.head')
    
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/vsetky_kategorie.css') }}" rel="stylesheet">

<body>
    <header>
        @include('layout.partials.nav-bar')
    </header>

    <br>
    <br>
    <br>

    <main>
        <div class="container-fluid">
            <div class="row riadok_nazov_kategorie justify-content-center">
                <div class="col-sm-8 col-8 jediny_stlpec_kategorie text-center">
                    <h5 class="nazov_kategorie">{{ $category->category }}</h5>
                </div>
            </div>

            @if (count($category->subCategory) >= 2)
            <div class="row riadok_1 justify-content-center">
                @foreach ($category->subCategory->take(2) as $image)
                    <div class="col-sm-4 col-7 d-flex justify-content-center">
                        <div class="card text-center">
                            <img src="{{asset('storage/'.$image->small_banner_path)}}" class="card-img" alt="kategoria {{ $image->category }}">
                            <a href="{{ url('category/'.$category->id.'/sub-category/'.$image->id) }}">
                                <div class="card-img-overlay">
                                    <h5 class="kategoria">{{ $image->category }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif

            @if (count($category->subCategory) >= 4)
                <div class="row riadok_2 justify-content-center">
                    @foreach ($category->subCategory->slice(2, 2) as $image)
                        <div class="col-sm-4 col-7 d-flex justify-content-center">
                            <div class="card text-center">
                                <img src="{{asset('storage/'.$image->small_banner_path)}}" class="card-img" alt="kategoria {{ $image->category }}">
                                <a href="{{ url('category/'.$category->id.'/sub-category/'.$image->id) }}">
                                    <div class="card-img-overlay">
                                        <h5 class="kategoria">{{ $image->category }}</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </main>

    <br>

    @include('layout.partials.footer')
    
    @include('layout.partials.script')


</body>


</html>