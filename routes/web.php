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
//Route::get('/', function () {
//    return view('frontend/index');
//});
Route::get('/', [IndexController::class, 'index'])
    ->name('admin.index');
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

Route::get('/admin1', function () {
    return view('admin/index');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
