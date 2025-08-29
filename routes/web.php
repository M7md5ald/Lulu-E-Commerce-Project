<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\WishlistController;
use App\Http\Controllers\admin\WishlistItemController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

#######################
#####    admin    #####
#######################

Route::get('/admin/dashboard', [App\Http\Controllers\admin\DashboardController::class, 'index'])->name('admin.dashboard');

//category
Route::get('/admin/categories/create',[CategoryController::class,'createCategory'])->name('categories.create');
Route::post('/admin/categories/post', [CategoryController::class, 'storeCategory'])->name('categories.store');
Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::delete('/admin/categories/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('/admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

//products
Route::get('/admin/products/create', [ProductController::class, 'createProducts'])->name('products.create');
Route::post('/admin/products/post', [ProductController::class, 'storeProducts'])->name('products.store');
Route::get('/admin/products/view', [ProductController::class, 'viewProducts'])->name('products.view');
Route::delete('/admin/products/{id}', [ProductController::class, 'deleteProducts'])->name('products.delete');
Route::get('/admin/products/{id}/edit', [ProductController::class, 'editProducts'])->name('products.edit');
Route::put('/admin/products/{id}', [ProductController::class, 'updateProducts'])->name('products.update');

//order
Route::get('/admin/order', [App\Http\Controllers\admin\OrderController::class, 'order'])->name('admin.order');

######################
#####    user    #####
######################

Route::get('/user/dashboard', [App\Http\Controllers\user\DashboardController::class, 'index'])->name('user.dashboard');

//order
Route::get('/user/order', [App\Http\Controllers\user\OrderController::class, 'order'])->name('user.order');

//wishlist

Route::get('/admin/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');

Route::post('/admin/wishlist/add', [WishlistItemController::class, 'add'])->name('wishlist.add');
Route::delete('/admin/wishlist/remove/{id}', [WishlistItemController::class, 'remove'])->name('wishlist.remove');