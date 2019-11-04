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

/*Route::get('/','BaseController@getindex');*/

Auth::routes();

Route::group(['middleware' => 'lang'], function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/users','UserController@getAll');
Route::get('/users/{id}','UserController@getOne');
/*Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/gallery', 'HomeController@index')->name('home');

Route::get('/Egypt', 'HomeController@getPhotoFromEgypt');

Route::get('/all','MaintextController@getAll');

Route::post('/ajax/gallery','Ajax\GalleryController@postIndex');

Route::group(['middleware' => 'moderator'], function (){
    Route::get('/account', 'AccountController@index')->name('account');
    Route::post('/account','AccountController@postIndex');
});

Route::group(['middleware' => 'admin'], function (){
    Route::get('/home/admin', 'HomeController@getAdmin');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/{url}','MaintextController@getindex');



