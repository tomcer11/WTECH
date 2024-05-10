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
        }

        $request->session()->flush();

        return redirect('/');
    }
}
