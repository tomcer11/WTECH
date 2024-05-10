<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeliveryRequest;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index(Request $request) {
        $delivery = $request->session()->get('delivery');

        if ($delivery) {
            return view('delivery.filled-form', ['delivery' => $delivery]);
        }
        else {
            return view('delivery.unfilled-form');
        }
    }

    public function store(StoreDeliveryRequest $request) {
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

        return redirect('/cart/payment');
    }
}
