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
    @include('layout.partials.script')

</body>


</html>