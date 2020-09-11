<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Resource_;

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

Route::get('/', 'Auth\LoginController@showLoginForm')->middleware('guest');


Route::get('consejal','Vistas@consejal')->name('consejal');
Route::get('secretaria','Vistas@secretaria')->name('secretaria');





Route::resource('cargos','CargoController');
Route::resource('partidos','PartidoController');
Route::resource('tipovotaciones','TipoVotacionController');
Route::resource('personas','PersonaController');
Route::resource('asistencias', 'AsistenciaController');
Route::resource('proyectos','ProyectoController');
Route::resource('proyectos-votaciones','ProyectoVotacionController');
Route::resource('votaciones','VotacionController');



Route::get('cargos/estado/{id}', 'CargoController@change')->name('cargos.status');
Route::get('partidos/estado/{id}', 'PartidoController@change')->name('partidos.status');
Route::get('tipovotaciones/estado/{id}', 'TipoVotacionController@change')->name('tipovotaciones.status');
Route::get('personas/estado/{id}', 'PersonaController@change')->name('personas.status');

Route::get('proyectos/estado/{id}', 'ProyectoController@change')->name('proyectos.status');
Route::get('proyectos-votaciones/estado/{id}', 'ProyectoVotacionController@change')->name('proyectos-votaciones.status');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

