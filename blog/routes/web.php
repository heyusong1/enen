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
//Route::get('/abc', 'AbcController@add');

//
Route::any('/index', 'AdminController@index');
Route::any('/add', 'AdminController@add');
Route::any('reg/index', 'RegController@index');
Route::any('reg/add', 'RegController@add');
Route::any('reg/show', 'RegController@show');
Route::any('reg/deletes', 'RegController@deletes');
Route::any('reg/updates', 'RegController@updates');
Route::any('reg/upd', 'RegController@upd');


//

Route::any('/index', 'OneController@index');
Route::any('/add', 'OneController@add');
Route::any('/show', 'OneController@show');
Route::any('/deletes', 'OneController@deletes');
Route::any('/updates', 'OneController@updates');
Route::any('/upd', 'OneController@upd');
Route::any('/login', 'OneController@login');



