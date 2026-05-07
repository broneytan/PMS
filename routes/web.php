<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('components', function () {
    return view('components');
})->name('components'); 
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/product/create', [ProductController::class, 'create'])
    ->name('products.create');
Route::post('/product/store', [ProductController::class, 'store'])
    ->name('products.store');
Route::get('/products/show/{product}', [ProductController::class, 'show'])
    ->name('products.show');
Route::get('/product/edit', [ProductController::class, 'edit'])
    ->name('products.edit');