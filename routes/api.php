<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/************************************ Prueba *****************/
Route::group(['prefix' => 'Prueba'], function () {
    Route::get('/list', [PruebaController::class, 'list'])->name('Prueba.list');
    Route::get('/index', [PruebaController::class, 'index'])->name('Prueba.index');
    Route::post('/destroy', [PruebaController::class, 'destroy'])->name('Prueba.destroy');
    Route::post('/store', [PruebaController::class, 'store'])->name('Prueba.store');
    Route::get('/show', [PruebaController::class, 'show'])->name('Prueba.show');
});
