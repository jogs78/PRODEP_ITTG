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

//Route::post('/tramites/beneficiarios','TramitesController@beneficiarios');
//Route::put('/tramites/beneficiarios','TramitesController@conceder');
Route::resource('tramites','TramitesController');
//Route::get('/tramites', 'TramitesController@listar_tramites');


Route::put('/subtramites/privatizar','SubtramitesController@privatizar');
Route::put('/subtramites/publicar','SubtramitesController@publicar');

Route::post('/subtramites/beneficiarios','SubtramitesController@beneficiarios');
Route::put('/subtramites/beneficiarios','SubtramitesController@conceder');
Route::get('/subtramites/{id_tramite}', 'SubtramitesController@index');
Route::resource('subtramites','SubtramitesController')->except([
    'index', 'show'
]);

/*
Route::get('/evidencias/{id_tramite}', 'EvidenciasController@index');

Route::resource('evidencias','EvidenciasController')->except([
    'index', 'show', 'create', 'edit', 'update'
]);
*/
Route::post('/evidencias/beneficiarios','EvidenciasController@beneficiarios');
Route::put('/evidencias/beneficiarios','EvidenciasController@conceder');
Route::post('/s_evidencias/','EvidenciasController@store');
Route::post('/s_evidencias2/','EvidenciasController@store2');

Route::get('/ver/{id_evidencia}','EvidenciasController@show');

Route::get('/evidencias/{id_tramite}','EvidenciasController@index');
Route::put('/evidencias/{id_tramite}','EvidenciasController@update');
Route::delete('/evidencias/{id_tramite}','EvidenciasController@destroy');

Route::resource('beneficiarios','BeneficiariosController');

