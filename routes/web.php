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

    $name = 'Jean Gomez';
    $tasks = [
        'Go to the store',
        'Finish my screencast',
        'Clean the house'
    ];

    return view('welcome', compact('name'), compact('tasks'));
});

Route::get('/about',function (){
   return view('about');
});
