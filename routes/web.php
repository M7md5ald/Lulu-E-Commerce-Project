<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

#####    admin    #####
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');


#####    user    #####
Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
