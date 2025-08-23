<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Cart_Item;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        // Example: get all items for a user's cart (assuming user has one cart)
        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);
        $cartItems = $cart->cart_items()->with('product')->get();

        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request, $productId)
    {
        $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);

        $cartItem = Cart_Item::where('cart_id', $cart->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            // If product exists in cart, increase quantity
            $cartItem->quantity += $request->input('quantity', 1);
            $cartItem->save();
        } else {
            // Otherwise, create a new cart item
            Cart_Item::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'quantity' => $request->input('quantity', 1),
                'price' => Product::find($productId)->price,
            ]);
        }

        return redirect()->route('cart.show')->with('success', 'Product added to cart!');
    }

    public function removeFromCart($cartItemId)
    {
        $cartItem = Cart_Item::findOrFail($cartItemId);
        $cartItem->delete();

        return redirect()->route('cart.show')->with('success', 'Item removed from cart.');
    }

    public function checkout()
    {
        // Handle checkout logic, e.g., payment and order creation
        return view('cart.checkout');
    }
}
