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



Route::get('/', 'IndexController@index');

Route::get('/single', 'PhotographyController@index');





Route::get('/contact', 'ContactController@index');
Route::get('/services', 'ServicesController@index');



   Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settingindex', 'SettingController@index');
Route::post('/settingstore', 'SettingController@store');

Route::get('/coverphotoindex', 'CoverphotoController@index');
Route::get('/coverphotocreate', 'CoverphotoController@create');
Route::post('/coverphotostore', 'CoverphotoController@store');

Route::post('/coverphotoupdate', 'CoverphotoController@update');

Route::get('/about', 'AboutController@index');
Route::get('/aboutcreate', 'AboutController@create');
Route::post('/aboutupdate', 'AboutController@update');

Route::get('/', 'IndexController@index');

Route::get('/single', 'PhotographyController@index');
Route::get('/albumcreate', 'PhotographyController@create');
Route::get('/albumindex', 'PhotographyController@aindex');
Route::post('/albumstore', 'PhotographyController@store');
Route::get('/deletealbum/{id}', 'PhotographyController@destroy');



Route::get('/contact', 'ContactController@index');
Route::get('/services', 'ServicesController@index');
Route::get('/servicesindex', 'ServicesController@aindex');
Route::get('/servicescreate', 'ServicesController@create');
Route::post('/servicesstore', 'ServicesController@store');
Route::get('/servicesdelete/{id}', 'ServicesController@delete');

Route::get('/albumcreate', 'PhotographyController@create');
Route::get('/albumindex', 'PhotographyController@aindex');
Route::post('/albumstore', 'PhotographyController@store');

   
Auth::routes();




