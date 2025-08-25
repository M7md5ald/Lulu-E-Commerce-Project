<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\StockController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

#####    admin    #####
Route::get('/admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin.dashboard');

//category
Route::get('/admin/categories/create', [CategoryController::class, 'createCategory'])->name('categories.create');
Route::post('/admin/categories/post', [CategoryController::class, 'storeCategory'])->name('categories.store');
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/admin/categories/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

//order
Route::get('/admin/order', [App\Http\Controllers\admin\OrderController::class, 'order'])->name('admin.order');

#####    user    #####
Route::get('/user/dashboard', [App\Http\Controllers\user\DashboardController::class, 'index'])->name('user.dashboard');

//order
Route::get('/user/order', [App\Http\Controllers\user\OrderController::class, 'order'])->name('user.order');



####    products    ####
Route::get('/admin/products/create', [ProductController::class, 'createProducts'])->name('products.create');

Route::post('/admin/products/post', [ProductController::class, 'storeProducts'])->name('products.store');

Route::get('/admin/products/view', [ProductController::class, 'viewProducts'])->name('products.view');

Route::delete('/admin/products/{id}', [ProductController::class, 'deleteProducts'])->name('products.delete');

Route::get('/admin/products/{id}/edit', [ProductController::class, 'editProducts'])->name('products.edit');

Route::put('/admin/products/{id}', [ProductController::class, 'updateProducts'])->name('products.update');


####    stocks  ####
Route::get('/admin/stocks/view', [StockController::class, 'viewStocks'])->name('stocks.view');

Route::get('/admin/stocks/{id}/edit', [StockController::class, 'editStocks'])->name('stocks.edit');

Route::put('/admin/stocks/{id}', [StockController::class, 'updateStocks'])->name('stocks.update');
