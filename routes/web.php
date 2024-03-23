<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'fetchPublic'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/product', [ProductController::class, 'fetch'])->name('product');
Route::get('/member',[ProfileController::class, 'view'])->name('member');
Route::get('/vip_member', function () {return view('vip_member');})->name('vip_member');
Route::get('/cart', function () {return view('cart');})->name('cart');
Route::get('/summary', function () {return view('summary');})->name('summary');

// Product - Image CRUD
Route::get('/add-product', [ProductController::class, 'index']);
Route::post('/add-product',[ProductController::class, 'store']);

// VIP member - register
Route::get('vip_register', function () {return view('vip_register');})->name('vip_register');

require __DIR__ . '/auth.php';
