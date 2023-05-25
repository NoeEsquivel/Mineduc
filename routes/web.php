<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\AlumnoController;

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
    return view('layout.home');
});


Route::get('/indexa', [\App\Http\Controllers\AlumnoController::class, 'indexa'])->name('alumnos.indexa');
Route::get('/createa', [\App\Http\Controllers\AlumnoController::class, 'createa'])->name('alumnos.createa');
Route::post('/storea', [\App\Http\Controllers\AlumnoController::class, 'storea'])->name('alumnos.storea');
Route::get('/edita/{id}', [\App\Http\Controllers\AlumnoController::class, 'edita'])->name('alumnos.edita');
Route::put('/updatea/{id}', [\App\Http\Controllers\AlumnoController::class, 'updatea'])->name('alumnos.updatea');
Route::get('/showa/{id}', [\App\Http\Controllers\AlumnoController::class, 'showa'])->name('alumnos.showa');
Route::delete('/destroya/{id}', [\App\Http\Controllers\AlumnoController::class, 'destroya'])->name('alumnos.destroya');
