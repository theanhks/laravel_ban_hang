<?php
use Illuminate\Support\Facades\Route;
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
//use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
//use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;


Route::get('/manage/login', [AuthenticatedSessionController::class, 'create'])
    ->name('admin.login');
Route::post('/manage/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/manage/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('admin.logout');

//Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('auth.reset.password');
//Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('auth.send.reset.password');


