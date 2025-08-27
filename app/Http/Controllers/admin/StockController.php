<?php

namespace App\Http\Controllers\admin;

use App\Models\Stock;
use App\Models\Product;
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

    public function editStocks(Stock $stock)
    {
        //$stock = Stock::with('product')->findOrFail($id);

        //$products = Product::all();

        return view('admin.stocks.edit', compact('stock'));

        //return view('admin.stocks.edit', compact('stock', 'products'));
    }

    public function updateStocks(Request $request, Stock $stock)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:0'
        ]);

        $stock->update($validated);

        return redirect()->route('stocks.view')->with('success', 'Stock updated successfully');
    }
}
