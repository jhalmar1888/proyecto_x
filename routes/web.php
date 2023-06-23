<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoLicenciaController;
<<<<<<< HEAD
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\GradoController;
=======
use App\Http\Controllers\RolController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\GerenciaController;
use App\Http\Controllers\ArchivoController;

>>>>>>> be915838211c301f0db88dabb03da7dd95a9d3de

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


/****************************************** TIPO LICENCIA *********************************/
// Route::group(['prefix' => 'TipoLicencia'], function () {
//     Route::get('/index', [TipoLicenciaController::class, 'index'])->name('TipoLicencia.index');
//     Route::get('/show', [TipoLicenciaController::class, 'show'])->name('TipoLicencia.show');
//     Route::get('/list', [TipoLicenciaController::class, 'list'])->name('TipoLicencia.list');
//     Route::post('/store', [TipoLicenciaController::class, 'store'])->name('TipoLicencia.store');
//     Route::delete('/destroy', [TipoLicenciaController::class, 'destroy'])->name('TipoLicencia.destroy');
// });


Route::resource('TipoLicencia', TipoLicenciaController::class);
<<<<<<< HEAD
Route::resource('Persona', PersonaController::class);
Route::resource('Grado', GradoController::class);
=======
Route::resource('Cargo', CargoController::class);

Route::resource('Rol', RolController::class);
Route::resource('Especialidad', EspecialidadController::class);
Route::resource('Grado', GradoController::class);
Route::resource('Gerencia', GerenciaController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//-------------RUTA DE ARCHIVO --------------//
Route::resource('/archivo', ArchivoController::class);


>>>>>>> be915838211c301f0db88dabb03da7dd95a9d3de
