<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Bike shop - payment</title>
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

        @yield('content')
    </main>

    <br>
    <div class="mb-5"></div>
    @include('layout.partials.footer')
    @include('layout.partials.script')

</body>


</html>