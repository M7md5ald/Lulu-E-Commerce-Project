<?php

namespace App\Http\Controllers\admin;

use App\Models\Stock;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class StockController extends Controller
{
    public function viewStocks()
    {
        //$stocks = Stock::all();
        $stocks = Stock::with('product')->get();
        //$products = Product::all();
        return view('admin.stocks.view', compact('stocks'));
    }

    public function editStocks($id)
    {
        $stock = Stock::with('product')->findOrFail($id);
        $categories = Category::all();

        return view('admin.stocks.edit', compact('stock', 'categories'));
    }

    public function updateStocks(Request $request, $id)
    {
        $stock = Stock::findOrFail($id);

        $stock->update([
            'quantity' => $request->quantity
        ]);
        return redirect()->route('stocks.view')->with('success', 'Quantity updated successfully');
    }
}
