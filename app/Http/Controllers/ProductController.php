<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function mno(){
    //   dd($products);
// in folder views sub folder products there is index file.
        return view('products.index',['products' => Product::all()]); 
    }
}
