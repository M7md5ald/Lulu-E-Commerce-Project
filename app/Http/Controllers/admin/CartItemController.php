<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function showall()
    {
        $cartItems = CartItem::all();
        return view('user.cart.index', compact('cartItems'));
    }
}
