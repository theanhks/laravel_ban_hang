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

Route::group([
    // 'middleware' => ['api'],
    'prefix' => 'user'
], function ($router) {
    Route::get('login', function () {
        return view('frontend.user.login');
    });
    Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    
    Route::get('register', function () {
        return view('frontend.user.register');
    });
    
    // Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
    // Route::post('refresh', [AuthController::class, 'refresh'])->name('auth.refresh');
    // Route::post('me', [AuthController::class, 'me'])->name('auth.me');

    // Route::post('reset-password', [ForgotPasswordController::class, 'confirm'])->name('forget-password.confirm');
    // Route::post('reset-password/{token}', [ForgotPasswordController::class, 'reset'])->name('forget-password.reset');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
