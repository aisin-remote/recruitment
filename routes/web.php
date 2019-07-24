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

Route::namespace('Admin')->group(function() {
	Route::group(['prefix' => AIIASetting::getValue('admin_base_route'), 'as' => 'admin.'], function() {
		Auth::routes();
		Route::get('/', 'DashboardController@index');
		Route::get('home', 'DashboardController@index')->name('home');

		Route::group(['middleware' => 'auth'], function() {
			Route::resource('users', 'UserController');
			Route::resource('settings', 'SettingController');
		});
	});
});
