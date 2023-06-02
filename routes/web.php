<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\AlumnoController;
use app\Http\Controllers\TitularController;
use app\Http\Controllers\CatedraticoController;
//use app\Http\Controllers\BuscadorController;

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

Route::get('/', function () {    // la / nos lleva a la ruta principal
    return view('welcome');    //aqui va welcome   o layout/busca  o load para cargar la base de datos
});

//Ruta Alumnos
    Route::get('/indexa', [\App\Http\Controllers\AlumnoController::class, 'indexa'])->name('alumnos.indexa');
    Route::get('/createa', [\App\Http\Controllers\AlumnoController::class, 'createa'])->name('alumnos.createa');
    Route::post('/storea', [\App\Http\Controllers\AlumnoController::class, 'storea'])->name('alumnos.storea');
    Route::get('/edita/{id}', [\App\Http\Controllers\AlumnoController::class, 'edita'])->name('alumnos.edita');
    Route::put('/updatea/{id}', [\App\Http\Controllers\AlumnoController::class, 'updatea'])->name('alumnos.updatea');
    Route::get('/showa/{id}', [\App\Http\Controllers\AlumnoController::class, 'showa'])->name('alumnos.showa');
    Route::delete('/destroya/{id}', [\App\Http\Controllers\AlumnoController::class, 'destroya'])->name('alumnos.destroya');

//Ruta Titulares
    Route::get('/indext', [\App\Http\Controllers\TitularController::class, 'indext'])->name('titulares.indext');
    Route::get('/createt', [\App\Http\Controllers\TitularController::class, 'createt'])->name('titulares.createt');
    Route::post('/storet', [\App\Http\Controllers\TitularController::class, 'storet'])->name('titulares.storet');
    Route::get('/editt/{id}', [\App\Http\Controllers\TitularController::class, 'editt'])->name('titulares.editt');
    Route::put('/updatet/{id}', [\App\Http\Controllers\TitularController::class, 'updatet'])->name('titulares.updatet');
    Route::get('/showt/{id}', [\App\Http\Controllers\TitularController::class, 'showt'])->name('titulares.showt');
    Route::delete('/destroyt/{id}', [\App\Http\Controllers\TitularController::class, 'destroyt'])->name('titulares.destroyt');

//Ruta Catedraticos
    Route::get('/indexc', [\App\Http\Controllers\CatedraticoController::class, 'indexc'])->name('catedraticos.indexc');
    Route::get('/createc', [\App\Http\Controllers\CatedraticoController::class, 'createc'])->name('catedraticos.createc');
    Route::post('/storec', [\App\Http\Controllers\CatedraticoController::class, 'storec'])->name('catedraticos.storec');
    Route::get('/editc/{id}', [\App\Http\Controllers\CatedraticoController::class, 'editc'])->name('catedraticos.editc');
    Route::put('/updatec/{id}', [\App\Http\Controllers\CatedraticoController::class, 'updatec'])->name('catedraticos.updatec');
    Route::get('/showc/{id}', [\App\Http\Controllers\CatedraticoController::class, 'showc'])->name('catedraticos.showc');
    Route::delete('/destroyc/{id}', [\App\Http\Controllers\CatedraticoController::class, 'destroyc'])->name('catedraticos.destroyc');


  Route::get('/indexb', [\App\Http\Controllers\BuscadorController::class, 'indexb'])->name('indexb');



//
//Route::post('/indexb', [\App\Http\Controllers\BuscadorController::class, 'indexb'])->name('alumnos.indexb');




