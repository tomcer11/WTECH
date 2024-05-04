<!DOCTYPE html>
<html lang="sk">
<head>
    <title>Bike shop - main page</title>
    <meta charset="UTF-8">
    
    @include('layout.partials.head')

    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
</head>
    
<body>

    <header>
       @include('layout.partials.nav-bar') 
    </header>

    <br>

    <main>

        <section>
            @include('layout.partials.carousel')
        </section>

        <section id="Sales">
            <div class = "container my-5 text-center pt-5">
                <h2 class="display-4"><strong>Ponuka týždňa</strong></h2>
                <p>Zaujimavé ponuky, ktoré sme si pre vás pripravili pre tento týždeň.</p>
                <div class="row justify-content-center align-items-center">
                    @yield('offer')
                </div>
            </div>
        </section>

        <section id="New_items">
            <div class = "container my-5 text-center">
                <h2 class="display-4"><strong>Novinky týždňa</strong></h2>
                <p>Nenechajte si újsť tieto skvelé novinky.</p>
                <div class="row justify-content-center">
                    @yield('new')
                </div>   
            </div>
        
        </section>     

    </main>

    <br>

    @include('layout.partials.footer')
    
    @include('layout.partials.script')

</body>


</html>