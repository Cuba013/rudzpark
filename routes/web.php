<?php

use App\Http\Controllers\Main;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Основной маршрут

Route::get('/', [Main\IndexController::class, 'index'])->name('main.index');

Route::get('/includes', [Main\ProductController::class, 'slider'])->name('includes.slider');
Route::get('/products/{id}', [Main\ProductController::class, 'show'])->name('products.show');
Route::get('/categories/{id}', [Main\CategoryController::class, 'show'])->name('categories.show');

Route::prefix('admin')->group(function () {
    Route::get('/', Admin\Main\IndexController::class);
});

Route::prefix('admin')->name('admin.')->group(function () {
       Route::resource('categories', CategoryController::class);
       Route::resource('products', ProductController::class);
   });

Auth::routes();