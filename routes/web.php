<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


/* Route::get('/', function () {                // OR Use below way to route.
    return view('home'); 
}); */

Route::view('/', 'home');
Route::get('/products',[ProductController::class,'abcindex'])//abcindex is function in ProductController file class.
            ->name('abc.xyz');

