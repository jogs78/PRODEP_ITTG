<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::resource('tramites','TramitesController');
//Route::get('/tramites', 'TramitesController@listar_tramites');
Route::get('/subtramites/{id_tramite}', 'SubtramitesController@index');
Route::resource('subtramites','SubtramitesController')->except([
    'index', 'show'
]);

Route::get('/evidencias/{id_tramite}', 'EvidenciasController@index');
Route::resource('evidencias','EvidenciasController')->except([
    'index', 'show'
]);

