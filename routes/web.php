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

Route::get('/', function () {
    return view('user/index');
});
Route::get('/test', function () {
    return view('user/index2');
});

Route::get('/open-letter', function () {
    return view('user/open-letter');
});

Route::get('/open-letter', function () {
    return view('user/open-letter');
});

Route::get('/about-us', function () {
    return view('user/about-us');
});

Route::get('/admin1', function () {
    return view('admin/index');
});
