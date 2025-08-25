<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function order(){
        $orders = Order::all();
        return view('admin.order', compact('orders'));
    }
}
