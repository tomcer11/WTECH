@extends('layout.delivery')


@section('content')
<form class="row dodacie-udaje justify-content-end" action="{{url('/cart/delivery')}}" method="POST">
    @csrf
    <div class="col-6">
        <label for="input-name" class="form-label">Meno</label>
        <input name="name" type="text" class="form-control" id="input-name" required>
    </div>
    <div class="col-6">
        <label for="input-surname" class="form-label">Priezvisko</label>
        <input name="surname" type="text" class="form-control" id="input-surname" required>
    </div>
    <div class="col-12">
        <label for="input-email" class="form-label">E-mail</label>
        <input name="email" type="email" class="form-control" id="input-email" required>
    </div>
    <div class="col-12">
        <label for="input-phone_number" class="form-label">Telefónne číslo</label>
        <input name="phone" type="text" class="form-control" id="input-phone_number" required>
    </div>
    <div class="col-10">
        <label for="input-street" class="form-label">Ulica</label>
        <input name="street" type="text" class="form-control" id="input-street" required>
    </div>
    <div class="col-2">
        <label for="input-house-number" class="form-label">Popisné číslo</label>
        <input name="house_number" type="number" class="form-control" id="input-house-number" required>
    </div>
    <div class="col-6">
        <label for="input-city" class="form-label">Mesto</label>
        <input name="city" type="text" class="form-control" id="input-city" required>
    </div>
    <div class="col-6">
        <label for="input-postcode" class="form-label">PSČ</label>
        <input name="postcode" type="text" class="form-control" id="input-postcode" required>
    </div>   



    <div class="container submit-btn speci">
        <div class="d-flex justify-content-end">
                <button type="submit" id="button-cart" class="btn btn-primary btn-lg ml-2">
                    <span class="text-default">
                        Potvrd udaje
                    </span>
                </button>
        </div>
    </div>
</form>
@endsection