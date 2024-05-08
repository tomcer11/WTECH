<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request) {
        $cart = $request->session()->get('cart');
        $total_price = session()->get('total_price');
        return view('cart/index', ['cart' => $cart, 'total_price' => $total_price]);
    }

    public function addToCart(Request $request, $id, $count) {
        $product = Product::find($id);
        $cart = $request->session()->get('cart');
        if($cart != null){
            if (!array_key_exists($id, $cart)){
                $cart[$id] =[   'product_id' => $product->id,
                            'product_image_name' => $product->images[0]->name,
                            'product_producer' => $product->producer,
                            'product_model' =>$product->model,
                            'product_price' => $product->price,
                            'product_count' => $count,
                            'product_price' => $count * $product->price,
                        ];
                $request->session()->put('cart', $cart);
                $total_price = $request->session()->get('total_price');
                session()->forget('total_price');
                $request->session()->put('total_price', $total_price + $count * $product->price);
            }
        }
        else{
            $cart[$id] = [  'product_id' => $product->id,
                            'product_image_name' => $product->images[0]->name,
                            'product_producer' => $product->producer,
                            'product_model' =>$product->model,
                            'product_price' => $product->price,
                            'product_count' => $count,
                            'product_price' => $count * $product->price,
                        ];
            $request->session()->put('cart', $cart);
            $total_price = $request->session()->get('total_price');
            session()->forget('total_price');
            $request->session()->put('total_price', $total_price + $count * $product->price);
        }
        return redirect('cart');
    }

    public function deleteCartItem(Request $request, $id, $count) {
        $product = Product::find($id);
        $cart = $request->session()->get('cart');
        unset($cart[$id]);
        $request->session()->put('cart', $cart);
        $total_price = $request->session()->get('total_price');
        $request->session()->forget('total_price');
        session()->forget('total_price');
        $request->session()->put('total_price', $total_price - $count * $product->price);
        return redirect('cart');
    }
}
