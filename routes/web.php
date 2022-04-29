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

Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.index');
    Route::get('/cocktail/create', 'Auth\AdminController@create')->name('admin.cocktail.create');
    Route::post('/cocktail/store', 'Auth\AdminController@store')->name('admin.cocktail.store');
    Route::get('/cocktail/edit/{id}', 'Auth\AdminController@edit')->name('admin.cocktail.edit');
    Route::post('/cocktail/update/{id}', 'Auth\AdminController@update')->name('admin.cocktail.update');
    Route::post('/cocktail/delete/{id}', 'Auth\AdminController@destroy')->name('admin.cocktail.delete');
    Route::get('/base/create', 'Auth\AdminBaseController@create')->name('admin.base');
    Route::post('/base/store', 'Auth\AdminBaseController@store')->name('admin.base.store');
    Route::get('/split/create', 'Auth\AdminSplitController@create')->name('admin.split');
    Route::post('/split/store', 'Auth\AdminSplitController@store')->name('admin.split.store');
    Route::get('/users', 'Auth\AdminUsersController@index')->name('admin.users');
    Route::get('/users/edit/{id}', 'Auth\AdminUsersController@edit')->name('admin.users.edit');
    Route::post('/users/update/{id}', 'Auth\AdminUsersController@update')->name('admin.users.update');
    Route::post('/users/delete/{id}', 'Auth\AdminUsersController@destroy')->name('admin.users.destroy');
});


Route::get('/', 'HomeController@index');

Route::prefix('home')->group(function () {
Route::get('/', 'HomeController@index')->name('home');
Route::get('show/{id}', 'HomeController@show')->name('show');
});

Route::get('favorite', 'FavoriteController@index')->name('favorite');
Route::post('favorite/{cocktail}', 'FavoriteController@store')->name('favorites');
Route::post('unfavorite/{cocktail}', 'FavoriteController@destroy')->name('unfavorites');

Route::get('can-make', 'CanMakeController@index')->name('can-make');
Route::get('can-make/create', 'CanMakeController@create')->name('ingredients-create');
Route::get('can-make/store', 'CanMakeController@store')->name('ingredients-store');
Route::get('can-make/delete', 'CanMakeController@destroy')->name('ingredients-delete');

Route::get('original', 'OriginalController@index')->name('original');
Route::get('original/create', 'OriginalController@create')->name('original-create');
Route::post('original/store', 'OriginalController@store')->name('original-store');
Route::get('original/edit/{id}', 'OriginalController@edit')->name('original-edit');
Route::post('original/update/{id}', 'OriginalController@update')->name('original-update');
Route::post('original/delete/{id}', 'OriginalController@destroy')->name('original-delete');

Route::get('contact', 'ContactController@index')->name('contact');
