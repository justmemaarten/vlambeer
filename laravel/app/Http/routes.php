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

Route::get('/products', 'PagesController@products');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/product', 'PagesController@product');

Route::post('/auth/login', 'Auth\AuthController@postLogin');
//Route::get('/auth/register', 'AuthController@postRegister');
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