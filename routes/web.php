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
/*Route::get('/titulares', 'PeopleController@index')->name('titulares');
Route::get('/titulares/{id}/ver', 'PeopleController@show')->name('show');
Route::get('/titulares/{id}/editar', 'PeopleController@edit')->name('edit');
Route::post('/titulares/actualizar', 'PeopleController@update')->name('titulares.actualizar');*/



//panel administrativo
//titulares
Route::resource('titulares', 'Admin\PeopleController');
Route::get('ver_carga/{id}/', 'Admin\PeopleController@beneficiaries')->name('titulares.beneficiarios');
Route::get('/personas/autocomplete', 'HomeController@autocomplete');


//beneficiarios
Route::resource('beneficiarios', 'Admin\BeneficiaryController');
Route::get('nuevo-beneficiario/{people_id}',  'Admin\BeneficiaryController@create')->name('nuevo_beneficiario');


//Dependencias
Route::resource('dependencias', 'Admin\DependencyController');


//historias
Route::resource('historias', 'Admin\HistoryController');

//historia Ocupacional
Route::resource('historia_ocupacional', 'Admin\OccupationalHistoryController');
/*Route::get('/titular_nuevo', 'PeopleController@create')->name('titularNuevo');*/
//Route::post('/titular/guardar', 'PeopleController@store')->name('titular.create');
/*Route::get('/titular/editar', 'PeopleController@edit')->name('titular.editar');*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
