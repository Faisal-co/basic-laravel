<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

/* Route::get('/', function () {                
    return view('home'); 
}); */
// OR
Route::view('/', 'home');
Route::resource('categories', CategoryController::class);
Route::controller(ProductController::class)->group(function(){
//abcindex is function in ProductController file class.
Route::get('/products',[ProductController::class,'mno'])->name('abc.xyz'); // products index page.
 
Route::get('/products/create','create')->name('products.create');

Route::post('/products/store','store')->name('products.store');

// With route binding to fetch one record
Route::get('/products/{product}', 'show')->name('products.show');
// With route binding to edit record
Route::get('/products/{product}/edit', 'edit')->name('products.edit');
// With route binding to update record
Route::patch('/products/{product}','update')->name('products.update');
// With route binding to delete record
Route::delete('/products/{product}','destroy')->name('products.destroy');

// OR With id Way to fetch one record
Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show')
    ->where('id', '[0-9]+');


});
require __DIR__.'/auth.php';
