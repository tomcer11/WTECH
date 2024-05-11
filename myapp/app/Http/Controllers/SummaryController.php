<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Order;
use App\Models\OrderSpecification;
use App\Models\Payment;
use App\Models\Shipment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SummaryController extends Controller
{
    public function index(Request $request){
        if(Auth::check()){
            $order = Order::where('status', false)->where('user_id', Auth::id())->first();
            $payment = Payment::find($order->payment_id);
            $shipment = Shipment::find($order->shipment_id);

            $total_product_price = 0;
            foreach($order->products as $product){
                $total_product_price += $product->pivot->quantity * $product->price;
            }
            $order->total_price = $total_product_price;
            $order->save();

            $total_price = $total_product_price + $payment->price + $shipment->price;
            $order_spec = $order->orderSpecification;
            $adress = $order_spec->adress;
            return view('summary.auth', ['order' => $order, 'payment' => $payment, 'shipment' => $shipment,
                                        'total_price' => $total_price, 'order_spec' => $order_spec, 'adress' => $adress]); 
        }
        else{
            $delivery = $request->session()->get('delivery');
            $payment = Payment::find($request->session()->get('payment'));
            $shipment = Shipment::find($request->session()->get('shipment'));
            $total_price_products = $request->session()->get('total_price');
            $total_price = $total_price_products + $payment->price + $shipment->price;
            $request->session()->put('order_price', $total_price);
            return view('summary.guest', ['delivery' => $delivery, 'payment' => $payment, 'shipment' => $shipment,
                                        'total_price_products' => $total_price_products, 'total_price' => $total_price]); 
        }
    }

    public function makeOrder(Request $request){
        if(Auth::check()){
            $order = Order::where('status', false)->where('user_id', Auth::id())->first();
            $order->status = true;
            $order->save();
        }
        else{
            $delivery = $request->session()->get('delivery');
            $order = Order::create([
                'payment_id' => $request->session()->get('payment'),
                'shipment_id' => $request->session()->get('shipment'),
                'user_id' => null,
                'status' => true,
                'total_price' =>  $request->session()->get('order_price'),
                'created_at' => Carbon::now(timezone: true),
                'updated_at' => Carbon::now(timezone: true)
            ]);
            $adress = Adress::create([
                'street' => $delivery['street'],
                'house_number' => $delivery['house_number'],
                'city' => $delivery['city'],
                'country' => 'Slovakia',
                'postcode'=> $delivery['postcode'],
                'created_at' => Carbon::now(timezone: true),
                'updated_at' => Carbon::now(timezone: true)
            ]);
            OrderSpecification::create([
                'order_id' => $order->id,
                'adress_id' => $adress->id,
                'name' => $delivery['name'],
                'surname' => $delivery['surname'],
                'email' => $delivery['email'],
                'phone_number' => $delivery['phone'],
                'created_at' => Carbon::now(timezone: true),
                'updated_at' => Carbon::now(timezone: true)
            ]);

            foreach(session()->get('cart') as $id => $product){
                $order->products()->attach($id, ['quantity' => $product['product_count'],
                                                'price' => $product['product_price']]);
            }
            $request->session()->flush();
        }

        return redirect('/');
    }
}
