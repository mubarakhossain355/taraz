<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/view/category/{id}',[HomeController::class,'viewCategory'])->name('view.cat');


// Backend Routes

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'] )->name('dashboard');

    // Category Routes
    Route::resource('categories',CategoryController::class);

    // Product Routes

    Route::resource('products',ProductController::class);
});
