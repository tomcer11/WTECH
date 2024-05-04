@extends('layout.index')

@section('new')
    @foreach ($new_products as $new_product)
        <x-product-card name="{{ $new_product->producer }}" price="{{ $new_product->price }}" 
        photoPath="{{asset('storage/Obrazky/downhill_biker')}}" altText="Biker" />
    @endforeach
@endsection