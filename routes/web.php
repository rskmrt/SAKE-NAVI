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

// Route::get('/', function () {
//     return view('home');
// });


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index')->name('home');
Route::get('home/show/{id}', 'HomeController@show')->name('show');
Route::post('home/favorite/{cocktail}', 'FavoriteController@store')->name('favorites');
Route::post('home/unfavorite/{cocktail}', 'FavoriteController@destroy')->name('unfavorites');

Route::get('can-create', 'CanCreateController@index')->name('can-create');

Route::get('original', 'OriginalController@index')->name('original');

Route::get('favorite', 'FavoriteController@index')->name('favorite');

