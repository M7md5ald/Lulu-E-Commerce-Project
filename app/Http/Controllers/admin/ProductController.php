<?php

namespace App\Http\Controllers\admin;

use App\Models\Stock;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function createProducts()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    public function storeProducts(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|string|max:255',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        $stock = new Stock();
        $stock->product_id = 0;
        $stock->save();
        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
            'category_id' => $request->category_id,
            'stock_id' => $stock->id,
        ]);
        $stock->product_id = $product->id;
        $stock->save();

        return redirect()->route('products.create')->with('success', 'Product added successfully');
    }

    public function viewProducts()
    {
        $products = Product::all();
        return view('admin.products.view', compact('products'));
    }

    public function deleteProducts($id)
    {
        $product = Product::findOrFail($id);
        $stock = Stock::findOrFail($product->stock_id);
        $product->delete();
        $stock->delete();
        return redirect()->route('products.view')->with('success', 'Product deleted successfully');
    }

    public function editProducts($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function updateProducts(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $product->image = $request->file('image')->store('products', 'public');
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            //'quantity'=>$request->quantity,
            'image' => $request->image,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('products.view')->with('success', 'Product updated successfully');
    }
}
