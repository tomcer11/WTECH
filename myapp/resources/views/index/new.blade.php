@foreach ($new_products as $new_product)
<p>dd</p>
    <x-product-card name="{{ $new_product->producer }}" price="{{ $new_product->price }}" 
    photoPath="{{asset('storage/'.$new_product->images[0]->name)}}" altText="Biker" ></x-product-card>
    <p>dd</p>
@endforeach