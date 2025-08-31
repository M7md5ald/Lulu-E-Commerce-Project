<?php

namespace App\Http\Controllers\admin;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(){
        $orders = Order::all();
        return view('admin.order', compact('orders'));
    }


    

}
