@foreach ($offer_products as $offer_product)
    <p>dd</p>
    <x-product-card name="{{ $offer_product->producer }}" price="{{ $offer_product->price }}" 
    photoPath="{{asset('storage/'.$offer_product->images[0]->name)}}" altText="Biker"
     />
     <p>dd</p>
@endforeach 