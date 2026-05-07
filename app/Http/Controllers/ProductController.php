<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'qty' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'photo' => 'nullable|image|max:2048',
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->qty = $request->qty;
        $product->price = $request->price;
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store(
                'photos',
                'public'
            );
            $product->photo = $path;
        }
        $product->save();   
        return redirect()->route('products.index');
    }
    public function show(Product $product){
        return view('products.show', compact('product'));
    }
    public function edit(){
        return view('products.edit');
    }
}
