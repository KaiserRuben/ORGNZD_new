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


Route::get('/', 'ProjectController@index');

Route::get('/project/new/', 'ProjectController@new');
Route::post('/project/save/', 'ProjectController@save');
Route::get('/project/{id}/', 'ProjectController@project');
