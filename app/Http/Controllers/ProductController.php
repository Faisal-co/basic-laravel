<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\SaveProductRequest;

class ProductController extends Controller
{
    public function mno(){
    //   dd($products);
// in folder views sub folder products there is index file.
        return view('products.index',['products' => Product::orderBy('created_at')->paginate(3)]); 
    }
    public function create(){
        return view('products.create');
    }
    public function store(SaveProductRequest $requset){
        /*$product = new Product();
        $product->name = $requset->name;
        $product->description = $requset->description;
        $product->size = $requset->size;
        $product->save();*/
       
        //OR write simple associated array 
        /*$request->validate([
    'title' => 'required|unique:posts|max:255',
    'author.name' => 'required',
    'author.description' => 'required',
]);*/
        $product = Product::create($requset->validated());
        return redirect()->route('products.show', $product) ->with('status', 'Product Created');

    }
    // Way with id to fetch one record
    /*public function show($id){
        $product = Product::
        // where('id', $id)->get();
        // OR
        findOrFail($id);
        return view('products.show', compact('product'));
        }*/
        // Way with route binding to fetch one record
        public function show(Product $product){
        return view('products.show', compact('product'));
    }
    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }
    public function update(SaveProductRequest $request, Product $product){
        $product->update($request->validated());
        return redirect()->route('products.show', $product) ->with('status', 'Product Updated');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('abc.xyz') ->with('status', 'Product Deleted');
    }
}
