<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Shipment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request) {
        $payments = Payment::all();
        $shipments = Shipment::all();

        $selected_shipment = $request->session()->get('shipment');
        $selected_payment = $request->session()->get('payment');

        return view('payment.forms', ['payments' => $payments, 'shipments' => $shipments, 
            'selected_payment' => $selected_payment, 'selected_shipment' => $selected_shipment]);
    }

    public function storeShipment(Request $request) {
        $request->session()->forget('shipment');
        $request->session()->put('shipment', $request->shipment_option);
        return redirect('cart/payment');
    }

    public function storePayment(Request $request) {
        $request->session()->forget('payment');
        $request->session()->put('payment', $request->payment_option);

        return redirect('cart/summary');
    }
}
