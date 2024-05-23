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
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;

//Route::get('/', function () {
//    return view('frontend/index');
//});
Route::get('/', [IndexController::class, 'index'])
    ->name('index');
Route::get('/test', function () {
    return view('frontend/index2');
});

Route::get('/open-letter', function () {
    return view('frontend/open-letter');
});

Route::get('/lien-he.html', function () {
    return view('frontend/about-us');
});

Route::get('/san-pham.html', function () {
    return view('frontend/distribution-brand');
});

Route::get('/gioi-thieu.html', function () {
    return view('frontend/company-info');
});

Route::get('/gia-tot-nhat.html', function () {
    return view('frontend/best-price');
});

Route::get('/giao-hang-tan-noi.html', function () {
    return view('frontend/home-delivery');
});

Route::get('/san-pham-chinh-hang.html', function () {
    return view('frontend/authentic-product');
});

Route::get('/hinh-thuc-thanh-toan.html', function () {
    return view('frontend/payment-method');
});

Route::get('/chinh-sach-bao-hanh.html', function () {
    return view('frontend/warranty-policy');
});

Route::get('/huong-dan-mua-hang.html', function () {
    return view('frontend/purchase-guide');
});

Route::get('/admin1', function () {
    return view('admin/index');
});

Route::get('/sanpham/{slug}', [ProductController::class, 'index'])
->name('product');

Route::get('/danhmuc/{slug}', [CategoryController::class, 'index'])
    ->name('category');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'store'])->name('user.register');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin'])->name('user.login');

Route::middleware('auth.check')->group(function ($router) {
    // Route::post('refresh', [AuthController::class, 'refresh'])->name('auth.refresh');
    Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('me', [AuthController::class, 'me'])->name('auth.me');
    Route::get('mypage', [AuthController::class, 'mypage'])->name('auth.mypage');
    Route::post('mypage', [AuthController::class, 'editStore'])->name('auth.update');
    // Route::post('reset-password', [ForgotPasswordController::class, 'confirm'])->name('forget-password.confirm');
    // Route::post('reset-password/{token}', [ForgotPasswordController::class, 'reset'])->name('forget-password.reset');
});

Route::get('/tim-kiem.html', [IndexController::class, 'search'])
    ->name('search');

Route::get('/gio-hang.html', [CartController::class, 'index'])
    ->name('cart.index');

Route::get('/thanh-toan.html', [CartController::class, 'checkout'])
    ->name('cart.confirm');

Route::post('/thanh-toan.html', [CartController::class, 'save'])
    ->name('cart.checkout');

//Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
