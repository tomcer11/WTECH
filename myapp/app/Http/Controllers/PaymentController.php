<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Request $request) {
        $payments = Payment::all();
        $shipments = Shipment::all();

        if(Auth::check()){
            $order = Order::where('status', false)->where('user_id', Auth::id())->first();
            $selected_shipment = $order->shipment_id;
            $selected_payment = $order->payment_id;
        }
        else{
            $selected_shipment = $request->session()->get('shipment');
            $selected_payment = $request->session()->get('payment');
        }
        return view('payment.forms', ['payments' => $payments, 'shipments' => $shipments, 
            'selected_payment' => $selected_payment, 'selected_shipment' => $selected_shipment]);
    }

    public function storeShipment(Request $request) {
        if(Auth::check()){
            $order = Order::where('status', false)->where('user_id', Auth::id())->first();
            $order->shipment_id = $request->shipment_option;
            $order->save();
        }
        else{
            $request->session()->forget('shipment');
            $request->session()->put('shipment', $request->shipment_option);
        }
        return redirect('cart/payment');
    }

    public function storePayment(Request $request) {
        if(Auth::check()){
            $order = Order::where('status', false)->where('user_id', Auth::id())->first();
            $order->payment_id = $request->payment_option;
            $order->save();
        }
        else{
            $request->session()->forget('payment');
            $request->session()->put('payment', $request->payment_option);
        }
        return redirect('cart/summary');
    }
}
