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
    return view('sistema.inicio');
});

Route::get('/tst', function () {
    return App\User::find(11)->beneficiario->ca->clave;    
});


Route::get('/prodep', function () {
    return view('normativa.prodep');
});

Route::get('/contraloria_social', function () {
    return view('normativa.contraloria_social');
});

Route::get('/documents', function () {
    return view('normativa.documentos');
});
Route::get('/informes', function () {
    return view('normativa.informes');
});
Route::get('/quejas', function () {
    return view('normativa.quejas');
});


Route::get('/preguntas_frecuentes', function () {
    return view('sistema.preguntas');
});
Route::get('/transparencia', function () {
    return view('sistema.transparencia');
});
Route::get('/comision_tecnica', function () {
    return view('sistema.comision_tecnica');
});







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('tramites','TramitesController');
Route::pattern('id_tramite', '[0-9]+');
Route::get('tramites','TramitesController@index');
Route::post('tramites','TramitesController@store');
Route::put('tramites/{id_tramite}','TramitesController@update');
Route::delete('tramites/{id_tramite}','TramitesController@destroy');

Route::put('/tramites/privatizar','TramitesController@privatizar');
Route::put('/tramites/publicar','TramitesController@publicar');
Route::post('/tramites/beneficiarios','TramitesController@beneficiarios');
Route::put('/tramites/beneficiarios','TramitesController@conceder');

//Route::post('/tramites/beneficiarios','TramitesController@beneficiarios');
//Route::put('/tramites/beneficiarios','TramitesController@conceder');
//Route::get('/tramites', 'TramitesController@listar_tramites');

////Route::put('/subtramites/privatizar','SubtramitesController@privatizar');
////Route::put('/subtramites/publicar','SubtramitesController@publicar');
////Route::post('/subtramites/beneficiarios','SubtramitesController@beneficiarios');
////Route::put('/subtramites/beneficiarios','SubtramitesController@conceder');



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
Route::post('/s_evidencias3/','EvidenciasController@store3');

Route::get('/ver/{id_evidencia}','EvidenciasController@show');

Route::get('/evidencias/{id_tramite}','EvidenciasController@index');
Route::put('/evidencias/{id_tramite}','EvidenciasController@update');
Route::delete('/evidencias/{id_tramite}','EvidenciasController@destroy');

Route::resource('beneficiarios','BeneficiariosController');

Route::post('/cuerpos/miembros','CaController@miembros');
Route::put('/cuerpos/miembros','CaController@enrrolar');

Route::resource('cuerpos','CaController');



Route::get('/Prueba',function(){
$partes=explode(";","1;2;3");
$paginas_destinatarios=0;

foreach ($partes as $parte => $cuantas) {
    echo "add $cuantas";
    $paginas_destinatarios += $cuantas;
}
echo "<br>";
echo $paginas_destinatarios;
});
