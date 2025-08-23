<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

#####    admin    #####
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');


#####    user    #####
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');


####    products    ####
Route::get('/admin/products/create', [ProductController::class, 'createProducts'])->name('products.create');

Route::post('/admin/products/post', [ProductController::class, 'storeProducts'])->name('products.store');

Route::get('/admin/products/view', [ProductController::class, 'viewProducts'])->name('products.view');

Route::delete('/admin/products/{id}', [ProductController::class, 'deleteProducts'])->name('products.delete');

Route::get('/admin/products/{id}/edit', [ProductController::class, 'editProducts'])->name('products.edit');

Route::put('/admin/products/{id}', [ProductController::class, 'updateProducts'])->name('products.update');


####    stocks  ####
Route::get('/admin/stocks/view', [StockController::class, 'viewstocks'])->name('stocks.view');

Route::get('/admin/stocks/{id}/edit', [StockController::class, 'editstocks'])->name('stocks.edit');
