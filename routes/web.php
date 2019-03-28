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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/clients' , 'ClientController@store');
Route::get('/addclient','ClientController@create');
Route::get('/allclients', 'ClientController@index');
Route::get('/deleteclient/{id}', 'ClientController@delete');
Route::get('/editclient/{id}', 'ClientController@edit');
Route::post('/clientupdate/{id}', 'ClientController@update');
//Routes for Service operatins //
Route::get('/addservice/{id}','ServiceController@create');
Route::post('/addservice/{id}', 'ServiceController@store');
Route::get('/deleteservice/{id}', 'ServiceController@delete');
Route::get('/editservice/{id}', 'ServiceController@edit');
Route::post('/serviceupdate/{id}', 'ServiceController@update');
Route::get('/allservices', 'ServiceController@index');
Route::any('/search','ClientController@search');
