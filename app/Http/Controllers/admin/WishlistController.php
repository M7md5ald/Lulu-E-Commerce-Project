<?php 

namespace App\Http\Controllers\admin;

 use App\Http\Controllers\Controller;
  use App\Models\Wishlist; 
  use Illuminate\Http\Request; 
  use Illuminate\Support\Facades\Auth; 

  class WishlistController extends Controller 
  { 
    public function index() 
    { 
        $wishlist = Wishlist::where('user_id', Auth::id())->with('items.product')->first(); 
        return view('user.wishlist', compact('wishlist')); 
    } }