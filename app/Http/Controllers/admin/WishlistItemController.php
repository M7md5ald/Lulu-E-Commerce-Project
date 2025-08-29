<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Models\Wishlist_Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistItemController extends Controller
{
    public function add(Request $request)
{
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        // Use session to track wishlist (no auth)
        $sessionId = session()->getId();

        // Create a wishlist for this session if it doesn’t exist
        $wishlist = Wishlist::firstOrCreate([
            'session_id' => $sessionId,
        ]);

        // Add the product into wishlist_items
        Wishlist_Item::firstOrCreate([
            'wishlist_id' => $wishlist->id,
            'product_id'  => $request->product_id,
        ]);

        return back()->with('success', 'Product added to wishlist!');
    }

    public function remove($productId)
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->first();

        if ($wishlist) {
            Wishlist_Item::where('wishlist_id', $wishlist->id)
                ->where('product_id', $productId)
                ->delete();
        }

        return redirect()->back()->with('success', 'Product removed from wishlist!');
    }
}
