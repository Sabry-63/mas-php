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

Route::get('/','mainpageController@index')->name('index');


Route::get('/w', function () {
    return view('index');
});

Route::get('/getProductByCategory/{category}','mainpageController@getProductByCategory')->name('product');

Route::get('/categoryEdit/{category}','adminPanel@CategoryEdit')->name('categoryEdit');

Route::post('/catStore','adminPanel@catStore')->name('admin.catStore');

Route::put('/admin/catPost/{category}','adminPanel@CategoryEditPost')->name('admin.CategoryEditPost');

Route::get('/login','adminPanel@adminLoginGet')->name('admin.login');

Route::get('/admin','adminPanel@Category')->name('admin.category');

Route::post('/admin','adminPanel@CategoryPost')->name('admin.categorypost');

Route::post('/admin/{category}','adminPanel@CategoryDelete')->name('admin.categorydelete');


Route::get('/admin/product','adminPanel@productIndex')->name('admin.product.index');

Route::post('/admin/product/create','adminPanel@productStore')->name('admin.product.store');

Route::get('/admin/product/{product}/edit','adminPanel@productEdit')->name('admin.product.edit');

Route::put('/admin/product/{product}','adminPanel@productUpdate')->name('admin.product.update');


Route::delete('/admin/product/{product}','adminPanel@productDelete')->name('admin.product.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
