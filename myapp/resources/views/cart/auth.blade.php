@extends('layout.cart')


@section('content')
    @if($order && !$order->products->isEmpty())
        @foreach ($order->products->sortBy('id') as $product)
            <div class="card mb-3 cart">
                <div class="row g-0 align-items-center">
                    <div class="col-sm-3">
                    <img src="{{asset('storage/'.$product->images->first()->name)}}" class="img-fluid rounded-start" alt="$cart_item->images[0]->alt_text">
                    </div>
                    <div class="col-9">
                        <div class="card-body">
                            <div class="row align-items-center justify-content-between"> 
                                <div class="col-sm-3 col-9 order-sm-1 order-2 me-auto">
                                    <h5 class="card-title">{{$product->producer}}</h5>
                                    <p class="card-text text-secondary">{{$product->model}}</p>
                                </div>
                                <div class="col-sm-5 col-12 order-sm-2 order-3">
                                    <div class="input-group">
                                            <button class="btn btn-outline-secondary decrement" type="button">-</button>
                                            <div class="col-4">
                                                <form id="{{$loop->iteration}}" class="quantityForm" action="{{url('cart/count_change/'.$product->id.'/0')}}" method="POST">
                                                    @csrf
                                                    <input name="{{'quantity_'.$product->id}}"  min="1" max="99" required value="{{$product->pivot->quantity}}" type="integer" class="form-control text-center quantity" placeholder="{{$product->pivot->quantity}}" aria-label="Pocet">
                                                </form>
                                            </div>
                                            <button class="btn btn-outline-secondary increment" type="button">+</button>
                                            <button form="{{$loop->iteration}}" class="btn btn-dark" type="submit">Uloz</button>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-9 order-sm-3 order-4">
                                    <h5 class="card-title">{{$product->price}}€</h5>
                                </div> 
                                <div class="col-9 col-sm-1 order-sm-4 order-1">
                                    <form action="{{ url('cart', [$product->id, $product->pivot->quantity]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-close" aria-label="Close"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <h3 class="fs-3 pt-2 ms-5 text-black text-center pb-5 pt-5 border border" style="width:300px">Cena spolu: <span>{{$total_price}}€</span></h3>
        <form action="{{url('/cart/delivery')}}" method="GET">
            <button type="submit" class="btn btn-lg btn-primary ms-5 mb-5">Dokoncit objednavku</button>
        </form>
    @else
        <p>---Kosik je prazdny---</p>
    @endif
@endsection