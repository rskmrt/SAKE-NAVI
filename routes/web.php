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
    Route::get('/', 'Admins\AdminController@index')->name('admin.index');
    Route::get('/cocktail/create', 'Admins\AdminController@create')->name('admin.cocktail.create');
    Route::post('/cocktail/store', 'Admins\AdminController@store')->name('admin.cocktail.store');
    Route::get('/cocktail/edit/{id}', 'Admins\AdminController@edit')->name('admin.cocktail.edit');
    Route::post('/cocktail/update/{id}', 'Admins\AdminController@update')->name('admin.cocktail.update');
    Route::post('/cocktail/delete/{id}', 'Admins\AdminController@destroy')->name('admin.cocktail.delete');
    Route::get('/base/create', 'Admins\AdminBaseController@create')->name('admin.base');
    Route::post('/base/store', 'Admins\AdminBaseController@store')->name('admin.base.store');
    Route::post('/base/update/{id}', 'Admins\AdminBaseController@update')->name('admin.base.update');
    Route::post('/base/delete/{id}', 'Admins\AdminBaseController@destroy')->name('admin.base.destroy');
    Route::get('/split/create', 'Admins\AdminSplitController@create')->name('admin.split');
    Route::post('/split/store', 'Admins\AdminSplitController@store')->name('admin.split.store');
    Route::post('/split/update/{id}', 'Admins\AdminSplitController@update')->name('admin.split.update');
    Route::post('/split/delete/{id}', 'Admins\AdminSplitController@destroy')->name('admin.split.destroy');
    Route::get('/users', 'Admins\AdminUsersController@index')->name('admin.users');
    Route::get('/users/edit/{id}', 'Admins\AdminUsersController@edit')->name('admin.users.edit');
    Route::post('/users/update/{id}', 'Admins\AdminUsersController@update')->name('admin.users.update');
    Route::post('/users/delete/{id}', 'Admins\AdminUsersController@destroy')->name('admin.users.destroy');
});


Route::get('/', 'Users\HomeController@index');

Route::prefix('home')->group(function () {
    Route::get('/', 'Users\HomeController@index')->name('home');
    Route::get('show/{id}', 'Users\HomeController@show')->name('show');
});

Route::prefix('favorite')->group(function () {
    Route::get('/', 'Users\FavoriteController@index')->name('favorite');
    Route::post('favorite/{cocktail}', 'Users\FavoriteController@store')->name('isfavorites');
    Route::post('unfavorite/{cocktail}', 'Users\FavoriteController@destroy')->name('unfavorites');
});

Route::prefix('can-make')->group(function () {
    Route::get('/', 'Users\CanMakeController@index')->name('can-make');
    Route::get('create', 'Users\CanMakeController@create')->name('ingredients.create');
    Route::get('store', 'Users\CanMakeController@store')->name('ingredients.store');
    Route::get('delete', 'Users\CanMakeController@destroy')->name('ingredients.delete');
});

Route::prefix('original')->group(function () {
    Route::get('/', 'Users\OriginalController@index')->name('original');
    Route::get('create', 'Users\OriginalController@create')->name('original.create');
    Route::post('store', 'Users\OriginalController@store')->name('original.store');
    Route::get('edit/{id}', 'Users\OriginalController@edit')->name('original.edit');
    Route::post('update/{id}', 'Users\OriginalController@update')->name('original.update');
    Route::post('delete/{id}', 'Users\OriginalController@destroy')->name('original.delete');
});
