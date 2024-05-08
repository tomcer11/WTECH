@foreach ($new_products as $new_product)
    <x-product-card 
    id="{{ $new_product->id }}"
    name="{{ $new_product->producer }}" price="{{ $new_product->price }}"
    photoPath="{{asset('storage/'.$new_product->images[0]->name)}}" altText="Biker"
    maincategory="{{ $new_product->main_category_id }}"
    subcategory="{{ $new_product->sub_category_id }}"
    />
@endforeach