<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function viewstocks(){
        $stocks = Stock::all();
        return view('stocks.view', compact('stocks'));
    }

    public function editstocks($id){
        $products = Product::all();
        $stock = Stock::findOrFail($id);
        return view('stocks.edit', compact('stock', 'products'));
    }
}
