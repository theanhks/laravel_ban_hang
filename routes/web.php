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

Route::get('/admin1', function () {
    return view('admin/index');
});

Route::get('/sanpham/{slug}', [ProductController::class, 'index'])
->name('product');

Route::get('/danhmuc/{slug}', [CategoryController::class, 'index'])
    ->name('category');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
