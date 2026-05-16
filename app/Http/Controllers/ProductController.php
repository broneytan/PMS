<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\SaveProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(6);
        // $products = Product::orderBy('id', 'desc')->get();
        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create');
    }
    public function store(SaveProductRequest $request)
    {
        $data= $request->validated();
    
        
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store(
                'photos',
                'public'
            );
            $data['photo'] = $path;
        }
        Product::create($data);
          
        return redirect()->route('products.index');
    }
    public function show(Product $product){
        return view('products.show', compact('product'));
    }
    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }
    //create method for delete product
    public function delete(Product $product) 
    { 
        if ($product->photo && Storage::disk('public')->exists($product->photo)) { 
            Storage::disk('public')->delete($product->photo); 
        } 
        $product->delete(); 
        return redirect()->route('products.index')->with('status','Product deleted successfully.'); 
    } 
    public function update(SaveProductRequest $request, Product $product)
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            if (
                $product->photo && Storage::disk('public')
                ->exists($product->photo)
            ) {
                Storage::disk('public')->delete($product->photo);
            }
            $data['photo'] = $request->file('photo')->store(
                'photos',
                'public'
            );
        }
        $product->update($data);
        return redirect()->route('products.show', $product)->with('status', 'Product updated successfully.');
    }
}
