<?php

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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/products', function () {
    return view('products.listproduct');
});

Route::get('/productsdetail', function () {
    return view('products.detailproduct');
});

Route::get('/result', function () {
    return view('products.result');
});

Route::get('/checkout', function () {
    return view('products.checkout');
});

Route::get('/history', function () {
    return view('products.history');
});

Route::get('/cart', function () {
    return view('products.cart');
});

Route::middleware(['auth'])->group(function () {
});
