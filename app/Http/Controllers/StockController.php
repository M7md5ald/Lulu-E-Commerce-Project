<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StockController extends Controller
{
    public function viewStocks(){
        $stocks = Stock::all();
        return view('stocks.view', compact('stocks'));
    }

    public function editStocks($id){
        $stock = Stock::findOrFail($id);
        $product = stock::findOrFail($stock->product_id);
        return view('stocks.edit', compact('stock', 'product'));
    }

    public function updateStocks(Request $request, $id){
        $stock = Stock::findOrFail($id);

        // if($request->hasFile('image')){
        //     if($stock->image){
        //         Storage::disk('public')->delete($stock->image);
        //     }
        //     $stock->image = $request->file('image')->store('stocks', 'public');
        // }

        $stock->update([
            'quantity'=>$request->quantity,
        ]);
        return redirect()->route('stocks.view')->with('success', 'stock updated successfully');
    }
}
