<?php

namespace App\Http\Controllers\admin;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart()
    {
        // Get the user's cart
        $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);

        // Get all items with product relation
        $cartItems = $cart->cart_items()->with('product')->get();

        // Calculate total price
        $totalPrice = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        // Pass both cartItems and totalPrice to the view
        return view('user.cart.show', compact('cartItems', 'totalPrice'));
    }

    public function addToCart(Request $request, $productId)
    {
        $cart = Cart::firstOrCreate(['user_id' => Auth::user()->id]);

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            // If product exists in cart, increase quantity
            $cartItem->quantity += $request->input('quantity', 1);
            $cartItem->save();
        } else {
            // Otherwise, create a new cart item
            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'quantity' => $request->input('quantity', 1),
                'price' => Product::find($productId)->price,
            ]);
        }

        return redirect()->route('user.cart.show')->with('success', 'Product added to cart!');
    }

    public function removeFromCart($cartItemId)
    {
        $cartItem = CartItem::findOrFail($cartItemId);
        $cartItem->delete();

        return redirect()->route('user.cart.showx')->with('success', 'Item removed from cart.');
    }

    public function checkout()
    {
        // Handle checkout logic, e.g., payment and order creation
        return view('user.cart.checkout');
    }
}
