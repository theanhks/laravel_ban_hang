<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductCategoryController;



Route::prefix('manage')->middleware('auth:admin')->group(function () {
    Route::get('/', [IndexController::class, 'index'])
        ->name('admin.index');

    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])
        ->name('admin.product');
        Route::get('/create', [ProductController::class, 'create'])
            ->name('admin.product.create');
        Route::post('/create', [ProductController::class, 'store'])
            ->name('admin.product.store');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])
            ->name('admin.product.edit');
        Route::post('/edit/{id}', [ProductController::class, 'update'])
            ->name('admin.product.update');
        Route::delete('/delete/{id}', [ProductController::class, 'destroy'])
            ->name('admin.product.destroy');
    });

    Route::prefix('/category')->group(function () {
        Route::get('/', [ProductCategoryController::class, 'index'])
        ->name('admin.category');
        Route::get('/create', [ProductCategoryController::class, 'create'])
            ->name('admin.category.create');
        Route::post('/create', [ProductCategoryController::class, 'store'])
            ->name('admin.category.store');
        Route::get('/edit/{id}', [ProductCategoryController::class, 'edit'])
            ->name('admin.category.edit');
        Route::post('/edit/{id}', [ProductCategoryController::class, 'update'])
            ->name('admin.category.update');
        Route::delete('/delete/{id}', [ProductCategoryController::class, 'destroy'])
            ->name('admin.category.destroy');
    });

});
//Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('auth.reset.password');
//Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('auth.send.reset.password');


