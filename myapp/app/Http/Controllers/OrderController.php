<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(User $user) {
        $order = $user->orders->where('status', false);

        $cart_items = $order->products;
        return view('layout.cart');
    }
}
