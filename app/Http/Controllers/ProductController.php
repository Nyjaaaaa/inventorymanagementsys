<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){

        $search = $request['search'] ?? "";
        if($search != ""){
            $products = Product::where('name', 'LIKE', "%$search%")->with('category')->paginate(10);
        }
        else{
            $products = Product::with('category')->latest()->paginate(10);
        }
        return view('products.index', compact('products'));
    }

    public function create(){

        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $request->user()->product()->create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')->with('message', 'Product added succesfully.');
        
    }

    public function edit(Product $product){

        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product){

        $validated = $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($validated);

        return redirect()->route('products.index')->with('message', 'Product updated succesfully.');
    }

    public function destroy(Product $product){
        
        $product->delete();
        
        return back()->with('message', 'Product deleted succesfully.');
    }
}
