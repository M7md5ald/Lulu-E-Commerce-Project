<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function createCategory() {
        return view('admin.categories.create');
    }


    public function storeCategory(Request $request){
        $request->validate([
            'name'=>'required|string|max:225',
        ]);
        Category::create([
            'name'=>$request->name,
        ]);
        return redirect()->route('categories.create')->with('success', 'Category added successfully');
    }



    public function index(){
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }


    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.index')->with('success','Category delete successful');
    }


    public function edit($id){
        $category = Category:: findOrFail($id);
        return view('admin.categories.edit',compact('category'));
    }


    public function update(Request $request,$id){
        $category = Category:: findOrFail($id);
        $category->update([
            'name' =>$request->input('name')
        ]);
        return redirect()->route('categories.index')->with('success','Category update successful');
    }
}
