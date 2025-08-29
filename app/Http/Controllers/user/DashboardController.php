<?php

namespace App\Http\Controllers\user;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $showProducts = Product::all();
        return view('user.dashboard', compact('showProducts'));
    }

    public function productDetails($id){
        $product = Product::findOrFail($id);
        $category = Category::findOrFail($product->category_id);

        return view('user.productDetails', compact('product', 'category'));
    }
}
