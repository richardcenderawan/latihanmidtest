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

Route::get('/todo','todo@index');
Route::get('/hello/{name}','Hello@Show');
Route::get('/todo','todo@index')->name('todoIndex');
Route::get('/todo/new','todo@new_form')->name('todoNewForm');
Route::post('/todo','todo@save')->name('todoCreate');
Route::get('/todo/{id}','todo@detail')->name('todoDetail');
Route::get('/todo/{id}/delete', 'todo@delete')->name('todoDelete');
Route::get('/todo/edit/{id}','todo@edit')->name('todoEditForm');
Route::post('/todo/edit/{id}','todo@update')->name('todoUpdate');
