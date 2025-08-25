<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

#####    admin    #####
Route::get('/admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin.dashboard');

//category
Route::get('/categories/create',[CategoryController::class,'createCategory'])->name('categories.create');
Route::post('/categories/post', [CategoryController::class, 'storeCategory'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/categories/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

//order
Route::get('/admin/order', [App\Http\Controllers\admin\OrderController::class, 'order'])->name('admin.order');

#####    user    #####
Route::get('/user/dashboard', [App\Http\Controllers\user\DashboardController::class, 'index'])->name('user.dashboard');

//order
Route::get('/user/order', [App\Http\Controllers\user\OrderController::class, 'order'])->name('user.order');

