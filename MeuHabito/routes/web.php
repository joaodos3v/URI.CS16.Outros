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

/* ROTAS ANTIGAS
	Route::get('habitos', 'HabitosController@index');
	Route::get('habitos/create', 'HabitosController@create');
	Route::post('habitos/store', 'HabitosController@store');
	Route::get('habitos/{id}/destroy', 'HabitosController@destroy');
	Route::get('habitos/{id}/edit', 'HabitosController@edit');
	Route::put('habitos/{id}/update', 'HabitosController@update');
*/

Route::group(['prefix' => 'habitos', 'where' => ['id' => '[0-9]+']], function() {
	Route::get('', 				['as' => 'habitos', 			'uses' =>'HabitosController@index']);
	Route::get('create', 		['as' => 'habitos.create', 		'uses' =>'HabitosController@create']);
	Route::get('{id}/destroy', 	['as' => 'habitos.destroy', 	'uses' =>'HabitosController@destroy']);
	Route::get('{id}/edit', 	['as' => 'habitos.edit', 		'uses' =>'HabitosController@edit']);
	Route::put('{id}/update', 	['as' => 'habitos.update', 		'uses' =>'HabitosController@update']);
	Route::post('store', 		['as' => 'habitos.store', 		'uses' =>'HabitosController@store']);
});


Route::group(['prefix' => 'historicos', 'where' => ['id' => '[0-9]+']], function() {
	Route::get('', 				['as' => 'historicos', 				'uses' =>'HistoricosController@index']);
	Route::get('create', 		['as' => 'historicos.create', 		'uses' =>'HistoricosController@create']);
	Route::get('{id}/destroy', 	['as' => 'historicos.destroy', 		'uses' =>'HistoricosController@destroy']);
	Route::get('{id}/edit', 	['as' => 'historicos.edit', 		'uses' =>'HistoricosController@edit']);
	Route::put('{id}/update', 	['as' => 'historicos.update', 		'uses' =>'HistoricosController@update']);
	Route::post('store', 		['as' => 'historicos.store', 		'uses' =>'HistoricosController@store']);
});