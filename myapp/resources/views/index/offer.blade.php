@extends('layout.index')

@section('new')
    @foreach ($new_products as $offer_product)
        <x-product-card name="{{ $offer_product->producer }}" price="{{ $offer_product->price }}" 
        photoPath="{{asset('storage/Obrazky/downhill_biker')}}" altText="Biker"/>
    @endforeach 
@endsection