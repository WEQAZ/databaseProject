<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SummaryController;
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
Route::get('/vip_member', [CustomerController::class, 'showVIPinfo'])->name('vip_member');
Route::get('/cart', [CartController::class, 'show_cart'])->name('cart');
Route::get('/summary', [SummaryController::class, 'show_summary'])->name('summary');

// Product - Image CRUD
Route::get('/add-product', [ProductController::class, 'index']);
Route::post('/add-product',[ProductController::class, 'store']);


// VIP member - register
Route::get('vip_register', [CustomerController::class, 'showRegistCust'])->name('vip_register');
Route::post('post_cust', [CustomerController::class, 'registerCust'])->name('post_cust');

// Cart - CRUD
Route::post('add_cart/{id}', [CartController::class, 'add_cart'])->name('add_cart');
Route::delete('delete_cart/{id}', [CartController::class, 'delete_cart'])->name('delete_cart');

// Summary - CRUD
Route::post('post_address_payment', [SummaryController::class, 'add_address_payment'])->name('post_address_payment');


require __DIR__ . '/auth.php';
