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

Route::resource('/products', 'ProductController');


Route::get('/product/{id}', 'HomeController@detail');

Route::get('/result', function () {
    return view('products.result');
});

Route::get('/conq', function () {
    return view('homeAdmin');
});

Route::get('/checkout', 'ProductController@checkout');

Route::get('/history', function () {
    return view('products.history');
});

Route::get('/mgpegawai', 'Homecontroller@user')->name('admin.user.homeUser');

Route::resource('/users', 'UserController');

Route::get('/mgpegawai-add', function () {
    return view('admin.pegawai.tambahPegawai');
});

Route::get('/mgpegawai-edit/{id}', 'Homecontroller@editUser');

Route::get('/mgproduct-add', 'Homecontroller@mgproductAdd');

Route::get('/mgproduct', 'Homecontroller@mgproduct')->name('admin.product.homeProduct');

Route::get('/mgproduct-detail/{id}', 'Homecontroller@detailAdminProduct');

Route::get('/mgproduct-edit/{id}', 'Homecontroller@editProduct');

// Category
Route::get('/mgcate', 'CategoryController@index')->name('admin.cate.homeCate');

Route::get('/mgcate-add', function () {
    return view('admin.category.tambahcategory');
});

Route::get('/mgcate-edit/{id}', 'CategoryController@edit');

Route::resource('/cates', 'CategoryController');

// End Category

// Brand

Route::get('/mgbrand', 'BrandController@index')->name('admin.brand.homeBrand');


Route::get('/mgbrand-add', function () {
    return view('admin.brand.tambahbrand');
});

Route::resource('/brands', 'BrandController')->middleware('auth');

Route::get('/mgbrand-edit/{id}', 'BrandController@edit');


// End Brand

// Order
// Route::get('/mgtransaction', function () {
//     return view('admin.transaction.hometransaction');
// });

Route::get('/mgorder', 'OrderController@index')->name('admin.transaction.homeTransaction');

// End Order

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', 'ProductController@cart');

    Route::get('/compare', 'ProductController@compareView');
    
    Route::post('/add-to-cart/{id}', 'ProductController@addToCart');

    Route::get('/remove-from-cart/{id}', 'ProductController@removeFromCart');

    Route::post('/product/compare', 'ProductController@compare')->name('product.compare');
});
