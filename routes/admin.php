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



Route::prefix('manage')->middleware('auth')->group(function () {
    Route::get('/', [IndexController::class, 'index'])
        ->name('admin.index');
});
//Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('auth.reset.password');
//Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('auth.send.reset.password');


