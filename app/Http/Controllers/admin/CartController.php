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
    // Show cart items
    public function showCart()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $cartItems = $cart->cart_items()->with('product')->get();

        $totalPrice = $cartItems->sum(function ($item) {
            return $item->price * $item->quantity;
        });

        return view('user.cart.show', compact('cartItems', 'totalPrice'));
    }

    // Add product to cart
    public function addToCart(Request $request, $productId)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['success' => false, 'message' => 'Please login first.']);
        }

        $cart = Cart::firstOrCreate(['user_id' => $user->id]);

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $request->input('quantity', 1);
            $cartItem->save();
        } else {
            $product = Product::find($productId);
            if (!$product) {
                return response()->json(['success' => false, 'message' => 'Product not found.']);
            }

            CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $productId,
                'quantity' => $request->input('quantity', 1),
                'price' => $product->price,
            ]);
        }

        $cartItems = $cart->cart_items()->with('product')->get();
        $totalPrice = $cartItems->sum(fn($item) => $item->price * $item->quantity);

        $cartHtml = view('user.cart.cart_details', compact('cartItems', 'totalPrice'))->render();

        return response()->json([
            'success' => true,
            'cartHtml' => $cartHtml
        ]);
    }

    // Remove item from cart
    public function removeFromCart($cartItemId)
    {
        $cartItem = CartItem::find($cartItemId);
        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->route('user.cart.show')->with('success', 'Item removed from cart.');
    }

    // Checkout page
    public function checkout()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        $cart = Cart::where('user_id', $user->id)->first();
        $cartItems = $cart ? $cart->cart_items()->with('product')->get() : collect([]);

        $totalPrice = $cartItems->sum(fn($item) => $item->price * $item->quantity);

        return view('user.cart.checkout', compact('totalPrice'));
    }
}
