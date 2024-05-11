<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderSpecification;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(Request $request) {
        if(Auth::check()){
            $order = Order::where('status', false)->first();
            if($order){
                $total_price = 0;
                foreach($order->products as $product){
                    $total_price += $product->pivot->quantity * $product->price;
                }
                $order->total_price = $total_price;
                $order->save();
                return view('cart/auth', ['order' => $order, 'total_price' => $total_price]);
            }
            else{
                return view('cart/auth', ['order' => null, 'total_price' => null]);
            }
        }
        else{
            $cart = $request->session()->get('cart');
            $total_price = session()->get('total_price');
            return view('cart/guest', ['cart' => $cart, 'total_price' => $total_price]);
        }
    }

    public function addToCart(Request $request, $m_id, $s_id, $p_id, $id, $count) {
        if(Auth::check()){
            $product = Product::find($id);
            $order = Order::where('status', false)->first();
            if($order){
                if(!$order->products()->where('product_id', $product->id)->exists())
                    $order->products()->attach($id, ['quantity' => $count, 'price' => $product->price]);
            }
            else{
                $user = $request->user();
                $order = Order::create([
                    'payment_id' => null,
                    'shipment_id' => null,
                    'user_id' => Auth::id(),
                    'status' => false,
                    'total_price' =>  0,
                    'created_at' => Carbon::now(timezone: true),
                    'updated_at' => Carbon::now(timezone: true)
                ]);
                OrderSpecification::create([
                    'order_id' => $order->id,
                    'adress_id' => null,
                    'name' => $user->name,
                    'surname' => $user->surname,
                    'email' => $user->email,
                    'phone_number' => $user->phone_number,
                    'created_at' => Carbon::now(timezone: true),
                    'updated_at' => Carbon::now(timezone: true)
                ]);
                $order->products()->attach($id, ['quantity' => $count, 'price' => $product->price]);
            }
        }
        else{
            $product = Product::find($id);
            $cart = $request->session()->get('cart');
            if (!$cart || !array_key_exists($id, $cart)){
                $cart[$id] =[   'product_id' => $product->id,
                            'product_image_name' => $product->images[0]->name,
                            'product_producer' => $product->producer,
                            'product_model' =>$product->model,
                            'product_price' => $product->price,
                            'product_count' => $count,
                            'total_price' => $count * $product->price,
                        ];
                $request->session()->put('cart', $cart);
                $total_price = $request->session()->get('total_price');
                session()->forget('total_price');
                $request->session()->put('total_price', $total_price + $count * $product->price);
            }
        }
        return redirect('cart');
    }

    public function deleteCartItem(Request $request, $id, $count) {
        if(Auth::check()){
            $order = Order::where('status', false)->first();
            $order->products()->detach($id);
        }
        else{
            $product = Product::find($id);
            $cart = $request->session()->get('cart');
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
            $total_price = $request->session()->get('total_price');
            $request->session()->forget('total_price');
            session()->forget('total_price');
            $request->session()->put('total_price', $total_price - $count * $product->price);
        }
        return redirect('cart');
    }
}
