<div class="container-fluid text-center mt-5 py-5 bg-dark nav-menu-payment rounded">
    <div class="row">
        <div class="col-4">
            <a class="nav-link {{Request::is('cart/delivery') ? 'text-primary disabled': 'text-secondary'}}" href="{{url('cart/delivery')}}">Dodacie údaje</a>
        </div>
        <div class="col-4">
            <a class="nav-link {{Request::is('cart/payment') ? 'text-primary disabled': 'text-secondary'}}" href="{{url('cart/payment')}}">Doprava a platba</a>
        </div>
        <div class="col-4">
            <a class="nav-link {{Request::is('cart/summary') ? 'text-primary disabled': 'text-secondary'}}" href="{{url('cart/summary')}}">Sumarizácia</a>
        </div>
    </div>
</div>