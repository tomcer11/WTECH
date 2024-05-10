@extends('layout.payment')

@section('content')
<div class="container-fluid py-2 my-3 method-class">
    <div class="row justify-content-center">
        <h2 class="col-3 text-center">Doprava</h2>
    </div>
    <form action="{{url('/cart/payment/shipment')}}" method="POST" class="row ps-2" id="shipment">
        @csrf
        @foreach ($shipments as $shipment)
            <div class="col-4 form-check">
                <input value="{{$shipment->id}}" name="shipment_option" class="form-check-input" type="radio" id="{{'delivery-option-'.$loop->iteration}}" 
                {{$shipment->id == $selected_shipment ? 'checked': ''}}>
                <label class="form-check-label" for="{{'delivery-option-'.$loop->iteration}}">
                    {{$shipment->name}}
                </label>
            </div>
            <div class="col-8 fs-5 text-end">{{$shipment->price}}€</div>
        @endforeach
    </form>
</div>
<div class="container submit-btn">
    <div class="d-flex justify-content-end">
        <button type="submit" form="shipment" id="button-cart" class="btn btn-primary btn-lg ml-2">
            <span class="text-default">
                Potvrd dopravu
            </span>
        </button>
    </div>
</div>

<div class="container-fluid py-2 my-3 method-class">
    <div class="row justify-content-center">
        <h2 class="col-3 text-center">Platba</h2>
    </div>
    <form action="{{url('/cart/payment/payment')}}" method="POST" class="row ps-2" id="payment">
        @csrf
        @foreach ($payments as $payment)
            <div class="col-4 form-check">
                <input value="{{$payment->id}}" name="payment_option" class="form-check-input" type="radio" id="{{'payment-option-'.$loop->iteration}}" 
                {{$payment->id == $selected_payment ? 'checked': ''}}>
                <label class="form-check-label" for="{{'payment-option-'.$loop->iteration}}">
                    {{$payment->name}}
                </label>
            </div>
            <div class="col-8 fs-5 text-end">{{$payment->price}}€</div>
        @endforeach
    </form>
</div>
<div class="container submit-btn">
    <div class="d-flex justify-content-end">
        <button type="submit" form="payment" id="button-cart" class="btn btn-primary btn-lg ml-2">
            <span class="text-default">
                Potvrd platbu a ukaz sumarizaciu
            </span>
        </button>
    </div>
</div>
@endsection