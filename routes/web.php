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

Route::get('/pjs','PersonajeController@index');

/*
Route::get('/fans',function(){
	return view ('fans');
});
*/

Route::get('/fans',[
	'uses'=>'FansController@index',
	'as'=>'fans'
	]);

Route::get('/registro','FansController@create');

Route::post('/store',[
	'uses'=>'FansController@store',
	'as'=>'store'
	]);