<?php

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
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::resource('type', 'TypeController');
    Route::resource('product', 'ProductController');
    Route::get('product/pizza', 'ProductController@pizza')->name('product.pizza');
    Route::get('product/sushi', 'ProductController@sushi')->name('product.sushi');
    Route::resource('user', 'UserController');
    Route::get('options', 'AdminController@options')->name('options');
});

Route::get('datatable/getproducts', 'ProductController@getProducts')->name('datatable.getproducts');
Route::get('datatable/getusers', 'AdminController@getUsers')->name('datatable.getusers');
Route::get('datatable/gettypes', 'TypeController@getTypes')->name('datatable.gettypes');