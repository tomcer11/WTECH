<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Bike shop - delivery</title>
    <meta charset="UTF-8">
    @include('layout.partials.head')
    <link rel="stylesheet" href="{{ asset('/css/3_casti.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    
<body>
    <header>
        @include('layout.partials.nav-bar')
    </header>

    <br>
    <main>
        @include('layout.partials.order-information-nav-bar')

        @if(count($errors) > 0)
            @foreach( $errors->all() as $message )
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{$message}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
        @endif

        @yield('content')
        
    </main>

    <br>
    <div class="mb-5"></div>
    @include('layout.partials.footer')
    @include('layout.partials.script')

</body>


</html>