<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/game', 'PagesController@product');

Route::get('/cart/data', 'PagesController@data');

Route::get('/cart/pay', 'PagesController@pay');

Route::get('/invoice', 'PagesController@invoice');

Route::resource('/shop/cart', 'CartController');

Route::resource('/user', "UserController");


//if (\Auth::check())
//{
    Route::resource('/store', "ProductController");
//}

Route::resource('/products', "ProductController");

Route::get('/products/sale', "ProductController@showSale");


Route::get('/admin', "PagesController@admin");
Route::resource('/admin/eCommerce/orders', 'OrdersController');
Route::resource('/admin/eCommerce/paidCart', 'CmsCartController');



// Authentication routes...
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/login', 'PagesController@home');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes...
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/register', 'PagesController@home');

Route::get('/', 'PagesController@home');

/*
 *
 * /
 * /about               GET
 * /contact             GET
 * /products            GET
 * /products/23         GET
 * /products/23         PUT
 * /products/
 *
 */