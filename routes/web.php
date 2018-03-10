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
Route::get('/project/{id}/edit', 'ProjectController@edit');
Route::get('/project/{id}/delete', 'ProjectController@delete');
Route::post('/project/{id}/update', 'ProjectController@update');

Route::get('/list/new/{projectid}', 'ListsController@new');
Route::post('/list/save/{projectid}', 'ListsController@save');

Route::get('/list/{id}/', 'ListsController@list');
Route::get('/list/{id}/edit', 'ListsController@edit');
Route::get('/list/{id}/delete', 'ListsController@delete');
Route::post('/list/{id}/update', 'ListsController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout/', 'UserController@logout');
