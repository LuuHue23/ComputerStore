<?php
Route::group(['prefix'=>'category'],function(){
	Route::get('list_category','Admin\CategoryController@list')->name('list_category');

	Route::get('search_cate','Admin\CategoryController@search')->name('search_cate');

	Route::get('add_category','Admin\CategoryController@add')->name('add_category');
	Route::post('add_category','Admin\CategoryController@post_add')->name('add_category');

	Route::get('edit_category/{id}','Admin\CategoryController@edit')->name('edit_category');
	Route::post('edit_category/{id}','Admin\CategoryController@post_edit')->name('edit_category');
	Route::get('delete_category/{id}','Admin\CategoryController@delete')->name('delete_category');
});