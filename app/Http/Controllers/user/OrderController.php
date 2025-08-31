<?php

namespace App\Http\Controllers\user;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(){
        
    $user = Auth::user();
    if (!$user) {
        return redirect()->route('login')->with('error', 'Please login first.');
    }

    $cart = Cart::where('user_id', $user->id)->first();
    $cartItems = $cart ? $cart->cart_items()->with('product')->get() : collect([]);
    $totalPrice = $cartItems->sum(fn($item) => $item->price * $item->quantity);

    return view('user.order', compact('cartItems', 'totalPrice'));
}

    public function store(Request $request){
    
        $userId = Auth::id(); 

        $validated = $request->validate([
       
            'current_name'         => 'required|string|max:255',
            'current_email'        => 'required|string|max:100',
            'current_phone_number' => 'required|numeric|min:0',
            'total_price'          => 'required|numeric|min:0',
            'payment_method' => 'required|in:credit_card,debit_card,instapay,COD',
        ]);

        DB::beginTransaction();

        try {
            
            $order = Order::create([
                'user_id'              => $userId,
                'current_name'         => $validated['current_name'],
                'current_email'        => $validated['current_email'],
                'current_phone_number' => $validated['current_phone_number'],
                'total_amount'         => $validated['total_price'],
                'status'               => 'pending',
            ]);

            
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
