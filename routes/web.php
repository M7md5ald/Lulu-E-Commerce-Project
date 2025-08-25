<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

#####    admin    #####
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');


#####    user    #####
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

// Cart Routes
Route::get('/user/cart', [CartController::class, 'showCart'])->name('user.cart.show');
Route::post('/user/cart/add/{productId}', [CartController::class, 'addToCart'])->name('user.cart.add');
Route::delete('/user/cart/remove/{cartItemId}', [CartController::class, 'removeFromCart'])->name('user.cart.remove');
Route::get('/user/cart/checkout', [CartController::class, 'checkout'])->name('user.cart.checkout');
