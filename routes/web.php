<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoLicenciaController;

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

Auth::routes();

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