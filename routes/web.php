<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/', 'Customer\CustomerController@index')->name('index');
Route::get('about','Customer\CustomerController@about')->name('about');


Route::group(['prefix'=>'Customer'],function()
{
	include 'account.php';
	Route::get('pro_detail','Customer\ProductController@product_detail')->name('pro_detail');

	
});

Route::group(['prefix'=>'Admin'],function()
{
	Route::get('/','Admin\AccountController@login')->name('login_admin');
	Route::post('login','Admin\AccountController@post_login')->name('login_admin');
	Route::get('logout','Admin\AccountController@logout')->name('logout_admin');
	Route::get('index','Admin\AccountController@index')->name('index_admin');
	// list account
	Route::get('list','Admin\AccountController@list')->name('list');
	Route::get('edit_account/{id}','Admin\AccountController@edit')->name('edit_account');
	Route::post('edit_account/{id}','Admin\AccountController@post_edit')->name('edit_account');

	Route::get('delete_account/{id}','Admin\AccountController@delete')->name('delete_account');
	include 'product.php';
	include 'category.php';
});

