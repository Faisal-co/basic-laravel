<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/* Route::get('/', function () {                
    return view('home'); 
}); */
// OR
Route::view('/', 'home');
//abcindex is function in ProductController file class.
Route::get('/products',[ProductController::class,'mno'])
            ->name('abc.xyz');

