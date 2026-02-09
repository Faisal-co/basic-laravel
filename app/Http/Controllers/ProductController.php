<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function abcindex(){
        return view('products.index');
    }
}
