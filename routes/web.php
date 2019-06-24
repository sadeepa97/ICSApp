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

Route::get('/',  'PagesController@index');
Route::get('/CStocks',  'PagesController@CStocks');
Route::get('/Stocks', 'PagesController@Stocks');


Route::resource('posts','PostController');

Route::resource('stocks','StocksController');



Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
