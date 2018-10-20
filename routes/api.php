<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/comentario',         'ComentarioController@read');
Route::get('/comentario/{id}',    'ComentarioController@find');
Route::post('/comentario',        'ComentarioController@create');
Route::put('/comentario/{id}',    'ComentarioController@update');
Route::delete('/comentario/{id}', 'ComentarioController@delete');

Route::get('/local',         'LocalController@read');
Route::get('/local/{id}',    'LocalController@find');
Route::post('/local',        'LocalController@create');
Route::put('/local/{id}',    'LocalController@update');
Route::delete('/local/{id}', 'LocalController@delete');

Route::get('/ocorrencia',         'OcorrenciaController@read');
Route::get('/ocorrencia/{id}',    'OcorrenciaController@find');
Route::post('/ocorrencia',        'OcorrenciaController@create');
Route::put('/ocorrencia/{id}',    'OcorrenciaController@update');
Route::delete('/ocorrencia/{id}', 'OcorrenciaController@delete');

Route::get('/periodo',         'PeriodoController@read');
Route::get('/periodo/{id}',    'PeriodoController@find');
Route::post('/periodo',        'PeriodoController@create');
Route::put('/periodo/{id}',    'PeriodoController@update');
Route::delete('/periodo/{id}', 'PeriodoController@delete');

Route::get('/tipo-desastre',         'TipoDesastreController@read');
Route::get('/tipo-desastre/{id}',    'TipoDesastreController@find');
Route::post('/tipo-desastre',        'TipoDesastreController@create');
Route::put('/tipo-desastre/{id}',    'TipoDesastreController@update');
Route::delete('/tipo-desastre/{id}', 'TipoDesastreController@delete');
