@foreach ($new_products as $new_product)
    <x-product-card name="{{ $new_product->producer }}" price="{{ $new_product->price }}" 
    photoPath="{{asset('storage/'.$new_product->images[0]->name)}}" altText="Biker"
    id_product="{{ $new_product->id }}" />
@endforeach