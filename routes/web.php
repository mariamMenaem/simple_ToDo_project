<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('/todos', 'TodoController@index')->name('todos.index');;

Route::get('/todos/create', 'TodoController@create');
Route::get('/todos/{todo}/edit', 'TodoController@edit')->name('todos.edit');
Route::put('/todos/{todo}/update', 'TodoController@update')->name('todos.update');
Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todos.complete');
Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todos.incomplete');
Route::delete('/todos/{todo}/delete', 'TodoController@delete')->name('todos.delete');


Route::post('/todos/create', 'TodoController@store');





