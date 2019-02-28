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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/setting', 'HomeController@setting')->name('setting');

Route::get('/update_setting', 'HomeController@update_setting')->name('update_setting');

Route::get('/slider', 'HomeController@slider')->name('slider');

Route::get('/image_view', 'HomeController@image_view')->name('image_view');

Route::get('{id}/edit', 'HomeController@edit')->name('edit');

Route::patch('{id}/update', 'HomeController@update')->name('update');

Route::get('/image_delete/{id}', 'HomeController@image_delete')->name('image_delete');

// Route::get('image-upload-with-validation',['as'=>'getimage','uses'=>'HomeController@getImage']);
Route::post('image-upload-with-validation',['as'=>'postimage','uses'=>'HomeController@postImage']);
