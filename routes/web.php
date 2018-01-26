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
Route::get('/titulares', 'PeopleController@index')->name('titulares');

Route::resource('titulares', 'PeopleController');
/*Route::get('/titular_nuevo', 'PeopleController@create')->name('titularNuevo');
Route::post('/titular/guardar', 'PeopleController@store')->name('titularGuardar');
Route::get('/titular/editar', 'PeopleController@edit')->name('titular.editar');*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
