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


    public function store(Request $request){
    $userId = Auth::id(); 

    // 1. Validate request
    $validated = $request->validate([
        // Order fields
        'current_name'         => 'required|string|max:255',
        'current_email'        => 'required|string|max:100',
        'current_phone_number' => 'required|numeric|min:0',

        // Payment fields
        'payment_method' => 'required|in:credit_card,debit_card,instapay,COD',
    ]);

    DB::beginTransaction();

    try {
        // 2. Create Order
        $order = Order::create([
            'user_id'              => $userId,
            'current_name'         => $validated['current_name'],
            'current_email'        => $validated['current_email'],
            'current_phone_number' => $validated['current_phone_number'],
            'status'               => 'pending',
        ]);

        // 3. Create Payment linked to Order
        $payment = Payment::create([
            'order_id'       => $order->id,
            'user_id'        => $userId,
            'payment_method' => $validated['payment_method'],
            'payment_status' => 'pending',
            'total_amount'   => $validated['total_price'],
        ]);

        DB::commit();

        return redirect()->route('user.order')->with('success', 'Order placed successfully!');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->withErrors(['error' => 'Failed to place order: '.$e->getMessage()]);
    }
}

}
