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

Route::get('/', 'TodoController@index');
Route::get('/todos/upsert/{todo?}', 'TodoController@viewUpsert');
Route::post('/todos/upsert/{todo?}', 'TodoController@doUpsert');
Route::post('/todos/delete/{todo}', 'TodoController@doDelete');
Route::post('/todos/save-sort-order', 'TodoController@doSaveSortOrder');
