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

Auth::routes();

//Route::post('login', 'Auth\LoginController@login');
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::prefix("platforms")->group(function () {
    Route::get("/", "PlatformController@index")->name("platforms");
    Route::get("create", "PlatformController@create")->name("platforms.create");
    Route::post("store", "PlatformController@store")->name("platforms.store");
    Route::get("edit/{id}", "PlatformController@edit")->name("platforms.edit");
    Route::put("update/{id}", "PlatformController@update")->name("platforms.update");
    Route::post("destroy/{id}", "PlatformController@destroy")->name("platforms.destroy");
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');