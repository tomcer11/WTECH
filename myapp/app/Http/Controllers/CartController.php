<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderSpecification;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function index(Request $request) {
        if(Auth::check()){
            $order = Order::where('status', false)->where('user_id', Auth::id())->first();
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
            if($cart){
                ksort($cart);
            }
            return view('cart/guest', ['cart' => $cart, 'total_price' => $total_price]);
        }
    }

    public function addToCart(Request $request, $m_id, $s_id, $p_id, $id, $count) {
        if(Auth::check()){
            $product = Product::find($id);
            $order = Order::where('status', false)->where('user_id', Auth::id())->first();
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
            $order = Order::where('status', false)->where('user_id', Auth::id())->first();
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

    public function updateCount(Request $request, $id) {
        $validator = $request->validate(['quantity_'.$id => 'integer|min:1|max:99']);
        if(!$validator){
            return back()->withErrors(["count" => "invalide range"])->withInput();
        }
        if(Auth::check()){
            $order = Order::where('status', false)->where('user_id', Auth::id())->first();
            $pivot = $order->products()->where('product_id', $id)->first()->pivot;
            $pivot->quantity = $request->input('quantity_'.$id);
            $pivot->save();
        }
        else{
            $product = Product::find($id);
            $total_price = $request->session()->get('total_price');
            $cart = $request->session()->get('cart');
            $total_price = ($total_price - $cart[$id]['product_count'] * $product->price) + $request->{'quantity_'.$id} * $product->price;
            $request->session()->forget('total_price');
            $cart_item = $cart[$id];
            unset($cart[$id]);

            $cart[$id] =[   'product_id' => $cart_item['product_id'],
                            'product_image_name' => $cart_item['product_image_name'],
                            'product_producer' => $cart_item['product_producer'],
                            'product_model' => $cart_item['product_model'],
                            'product_price' => $cart_item['product_price'],
                            'product_count' => $request->input('quantity_'.$id),
                            'total_price' => $request->input('quantity_'.$id) * $product->price,
                        ];
            $request->session()->put('cart', $cart);          
            $request->session()->put('total_price', $total_price);
        }
        return redirect('cart');
    }
}
