<?php 
Route::group(['prefix'=>'Cart'], function(){
	Route::get('cart','Customer\CartController@show')->name('show-cart');
	Route::get('add-cart/{id}','Customer\CartController@add')->name('add-cart');
	Route::get('update-cart/{id}','Customer\CartController@update')->name('update-cart');
	Route::get('delete-cart/{id}','Customer\CartController@delete')->name('delete-cart');
	Route::get('sign_checkout','Customer\CartController@sign')->name('sign_checkout');
});
?>