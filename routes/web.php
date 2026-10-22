<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;

Route::get('/', [UmkmController::class, 'index'])->name('home');
Route::get('/about', [UmkmController::class, 'about'])->name('about');
Route::get('/product', [UmkmController::class, 'product'])->name('product');
Route::get('/contact', [UmkmController::class, 'contact'])->name('contact');
Route::get('/umkm/{id}', [UmkmController::class, 'show'])->name('umkm.show');