<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

#####    admin    #####
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');


#####    user    #####
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

//category
Route::get('/categories/create',[CategoryController::class,'createCategory'])->name('categories.create');
Route::post('/categories/post', [CategoryController::class, 'storeCategory'])->name('categories.store');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/categories/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');