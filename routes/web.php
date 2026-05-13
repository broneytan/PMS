<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('components', function () {
    return view('components');
})->name('components'); 

Route::get('/product/create', [ProductController::class, 'create'])
    ->name('products.create');
Route::post('/product/store', [ProductController::class, 'store'])
    ->name('products.store');
Route::get('/products/show/{product}', [ProductController::class, 'show'])
    ->name('products.show');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])
    ->name('products.edit');
Route::get('/product/delete/{product}', [ProductController::class, 'delete'])
    ->name('products.delete');
Route::patch('/product/update/{product}', [ProductController::class, 'update'])
    ->name('products.update');
