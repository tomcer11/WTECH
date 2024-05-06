@foreach ($new_products as $offer_product)
    <x-product-card name="{{ $offer_product->producer }}" price="{{ $offer_product->price }}" 
    photoPath="{{asset('storage/'.$offer_product->images[0]->name)}}" altText="Biker"/>
@endforeach 