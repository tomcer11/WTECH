<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Bike shop - Cart</title>
    <meta charset="UTF-8">
    @include('layout.partials.head')
    <link rel="stylesheet" href="{{ asset('/css/kosik.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    
<body>
    <header>
        @include('layout.partials.nav-bar')
    </header>

    <br>
    <main>
        <div class="container-fluid">
            <div class="pt-5">
                @if($errors->any())
                    @foreach( $errors->all() as $message )
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach
                @endif
                <h2 class="fs-2 pt-2">Nákupný košík</h2>
                <h3 class="fs-5 pt-2 text-secondary">Produkty v košíku:</h3>
            </div>
            <section class="ps-5">
                @yield('content')
            </section>
        </div>
    </main>
    <br>
    <div class="mb-5"></div>
    @include('layout.partials.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @include('layout.partials.script')
    <script src="{{ asset('js/incrementDecrementCart.js') }}"></script>


</body>


</html>