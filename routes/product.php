<?php 
	Route::group(['prefix'=>'product'], function(){
		Route::get('list_product','Admin\ProductController@list')->name('list_product');
		Route::get('search_pro','Admin\ProductController@search')->name('search_pro');

		Route::get('add_product','Admin\ProductController@add')->name('add_product');
		Route::post('add_product','Admin\ProductController@post_add')->name('add_product');

		Route::get('edit_product/{id}','Admin\ProductController@edit')->name('edit_product');
		Route::post('edit_product/{id}','Admin\ProductController@post_edit')->name('edit_product');
		Route::get('delete_product/{id}','Admin\ProductController@delete')->name('delete_product');
	});
 ?>