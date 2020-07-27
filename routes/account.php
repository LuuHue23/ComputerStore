<?php
Route::group(['prefix'=>'account'],function(){
	Route::get('login','Customer\AccountController@login')->name('login');
	Route::post('login','Customer\AccountController@post_login')->name('login');
	Route::get('register','Customer\AccountController@register')->name('register');
	Route::post('register','Customer\AccountController@createAccount')->name('register');
	Route::get('logout','Customer\AccountController@logout')->name('logout');

	//hiển thị danh sách tài khoản
	
});