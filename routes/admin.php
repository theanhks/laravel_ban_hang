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



Route::prefix('manage')->middleware('auth')->group(function () {
    Route::get('/', [IndexController::class, 'index'])
        ->name('admin.index');

    Route::get('/product/', [ProductController::class, 'index'])
        ->name('admin.product');
    Route::get('/product/create', [ProductController::class, 'create'])
        ->name('admin.product.create');
    Route::post('/product/create', [ProductController::class, 'store'])
        ->name('admin.product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])
        ->name('admin.product.edit');
    Route::post('/product/edit/{id}', [ProductController::class, 'update'])
        ->name('admin.product.update');
    Route::post('product/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');

});
//Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('auth.reset.password');
//Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('auth.send.reset.password');


