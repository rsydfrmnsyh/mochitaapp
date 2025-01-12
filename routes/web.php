<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/products/create', [App\Http\Controllers\ProductsController::class, 'create'])->name('products.create');
Route::get('/products/{id}/edit', [App\Http\Controllers\ProductsController::class, 'edit'])->name('products.edit');
Route::patch('/products', [App\Http\Controllers\ProductsController::class, 'update'])->name('products.edit');
Route::get('/products/{id}', [App\Http\Controllers\ProductsController::class, 'show'])->name('products.show');
Route::post('/products', [App\Http\Controllers\ProductsController::class, 'store'])->name('products.create');
Route::delete('/products/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('products.show');
