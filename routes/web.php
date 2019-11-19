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

//Route::resource('usuarios', 'userController')->middleware('auth');

Route::get('/user/showregister', 'userController@showRegister');

Route::get('user/list', 'userController@index');
Route::post('/user/register','userController@store');
Route::put('user/update', 'userController@update');
Route::delete('user/delete', 'userController@destroy');
Route::get('user/{id}', 'userController@show')


?>