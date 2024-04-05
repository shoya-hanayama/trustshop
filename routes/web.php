<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ShopController;

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

// customer-------------------------------------------------
Route::get('/', 'App\Http\Controllers\CustomerController@index')->name('index');


// Route::get('/index', function () {
//     return view('customer.index');
// })->name('index');

Route::get('/shop_show', function () {
    return view('customer.shop_show');
})->name('shop_show');

Route::get('/items_index', function () {
    return view('customer.items_index');
})->name('items_index');

Route::get('/items_show', function () {
    return view('customer.items_show');
})->name('items_show');

Route::get('/purchase', function () {
    return view('customer.purchase');
})->name('purchase');


// layouts-----------------------------------------------------
Route::get('/sign_up', function () {
    return view('layouts.sign_up');
})->name('to_sign_up');

// sign_up--------------------------

Route::post('/sign_up', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('sign_up');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


// sign_in--------------------------
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');




Route::get('/sign_in', function () {
    return view('layouts.sign_in');
})->name('to_sign_in');

//会員トップページ表示ーーーーーーーーーーー
Route::get('/my_shop_index',  [App\Http\Controllers\UserController::class, 'my_shop_index'])->name('my_shop_index');


// ショップ登録ーーーーーーーーーーーーーーー
Route::get('/my_shop_add', 'App\Http\Controllers\ShopController@create')->name('my_shop_create');
Route::post('/my_shop_add', 'App\Http\Controllers\ShopController@store')->name('my_shop_store');


// ショップ詳細&登録商品一覧(my_shop_show.blade.php)ーー
Route::get('/my_shop_show/{id}', 'App\Http\Controllers\ShopController@show')->name('my_shop_show');


// 商品登録ーーーーーーーーーーーーーーーーーーー
Route::get('my_shop_products_add', 'App\Http\Controllers\ProductController@create')->name('products.create');
Route::post('my_shop_products_add','App\Http\Controllers\ProductController@store')->name('products.store');

// 商品編集ーーーーーーーーーーーーーーーーーー
Route::get('my_shop_products_edit/{id}/edit', 'App\Http\Controllers\ProductController@edit')->name('products.edit');
Route::put('my_shop_products_edit/{id}','App\Http\Controllers\ProductController@update')->name('products.update');


Route::get('/my_shop_add', function () {
    return view('admin.my_shop_add');
})->name('my_shop_add');


Route::get('/my_shop_items_add', function () {
    return view('admin.my_shop_items_add');
})->name('my_shop_items_add');

Route::get('/my_shop_items_edit', function () {
    return view('admin.my_shop_items_edit');
})->name('my_shop_items_edit');

Route::get('/my_shop_edit', function () {
    return view('admin.my_shop_edit');
})->name('my_shop_edit');
