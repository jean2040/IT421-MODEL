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
Route::get('/', 'TasksController@index');
Route::post('/tasks/store', 'TasksController@store');
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/new', 'TasksController@newTask');
Route::get('/tasks/show/{show}', 'TasksController@showOnly');
Route::get('/tasks/sort', 'TasksController@sort');

Route::patch('/tasks/{task}/edit', 'TasksController@edit');
Route::get('/tasks/{task}', 'TasksController@show');
Route::delete('/tasks/{task}/delete','TasksController@delete');

Route::post('/tasks/{task}/comments', 'CommentsController@create');


//Route::get('/', 'PostsController@index');
Route::get('/post/{post}', 'PostsController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
