<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeliveryRequest;
use App\Models\Adress;
use App\Models\Order;
use App\Models\OrderSpecification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    public function index(Request $request) {
        if(Auth::check()){
            $order = Order::where('status', false)->first();
            $order_spec = $order->orderSpecification;
            if($order_spec->adress_id){
                return view('delivery.auth-filled-form', ['order' => $order_spec, 'adress' => Adress::find($order_spec->adress_id)]);
            }
            else{
                return view('delivery.auth-unfilled-form', ['order' => $order_spec]);
            }
        }
        else{
            $delivery = $request->session()->get('delivery');

            if ($delivery) {
                return view('delivery.guest-filled-form', ['delivery' => $delivery]);
            }
            else {
                return view('delivery.guest-unfilled-form');
            }
        }
    }

    public function store(StoreDeliveryRequest $request) {
        if(Auth::check()){
            $adress = Adress::create([
                'street' => $request->street,
                'house_number' => $request->house_number,
                'city' => $request->city,
                'country' => 'Slovakia',
                'postcode'=> $request->postcode,
                'created_at' => Carbon::now(timezone: true),
                'updated_at' => Carbon::now(timezone: true)
            ]);
            $order = Order::where('status', false)->first();
            $order_spec = $order->orderSpecification;
            $order_spec->adress_id = $adress->id;
            $order_spec->save();
        }
        else{
            $request->session()->forget('delivery');
            $delivery = [
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'phone' => $request->phone,
                'street' => $request->street,
                'house_number' => $request->house_number,
                'city' => $request->city,
                'postcode' => $request->postcode,
            ];

            $request->session()->put('delivery', $delivery);
        }

        return redirect('/cart/payment');
    }
}
