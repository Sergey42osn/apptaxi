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

Route::get('/register', 'Auth\RegisterController@showRegister')->name('register');
Route::post('/register', 'Auth\RegisterController@Register')->name('register');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index');
Route::get('/home', 'IndexController@index')->name('');

Route::get('/login', 'Auth\MyAuthController@showLogin')->middleware('guest')->name('login');

Route::post('/login', 'Auth\MyAuthController@postLogin')->middleware('guest')->name('login');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::get('login', 'LoginController@index');
	Route::post('login', 'LoginController@login')->name('admin.login');

	Route::group(['middleware' => 'admin'], function() {
		Route::get('/','IndexController@index')->name('admin.admin');

        Route::get('/taxi/showankets', 'IndexController@showAnkets')->name('admin.showAnkets');
	});
});
