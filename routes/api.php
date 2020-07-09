<?php

use App\Product;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::put('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@delete');

Route::get('customers', 'CustomerController@index');
Route::get('customers/{customer}', 'CustomerController@show');
Route::post('customers', 'CustomerController@store');
Route::put('customers/{customer}', 'CustomerController@update');
Route::delete('customers/{customer}', 'CustomerController@delete');
