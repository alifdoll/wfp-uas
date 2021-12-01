<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/products', function () {
    return view('products.listproduct');
});

Route::get('/product/{id}', 'HomeController@detail');

Route::get('/result', function () {
    return view('products.result');
});

Route::get('/conq', function () {
    return view('homeAdmin');
});

Route::get('/checkout', function () {
    return view('products.checkout');
});

Route::get('/history', function () {
    return view('products.history');
});

Route::get('/mgpegawai', function () {
    return view('admin.pegawai');
});

Route::get('/mgproduct-detail', function () {
    return view('admin.productdetail');
});

Route::get('/mgproduct', function () {
    return view('admin.product');
});





Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', 'ProductController@cart');

    Route::get('/compare', 'ProductController@compareView');
    
    Route::get('/add-to-cart/{id}', 'ProductController@addToCart');

    Route::get('/remove-from-cart/{id}', 'ProductController@removeFromCart');

    Route::post('product/compare', 'ProductController@compare')->name('product.compare');
});
