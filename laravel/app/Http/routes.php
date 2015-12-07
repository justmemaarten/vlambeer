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

Route::get('/', 'PagesController@home');

Route::get('/home', 'PagesController@home');

Route::get('/products', 'PagesController@products');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/product', 'PagesController@product');

Route::get('/shop/cart', 'PagesController@cart');

// Authentication routes...
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/login', 'PagesController@home');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes...
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/register', 'PagesController@home');
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