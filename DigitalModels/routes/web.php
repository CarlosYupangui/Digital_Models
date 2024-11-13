<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/cliente', [ClienteController::class, 'index']);
Route::post('/guardar_info_Cli', [ClienteController::class, 'guardarCliente']);
Route::get('/infoCliente', [ClienteController::class, 'infoCliente']);
Route::get('/editarCli/{id}', [ClienteController::class, 'editarCli']);
Route::put('/actualizarInfoCli/{id}', [ClienteController::class, 'actualizarCli']);
Route::delete('/eliminarCli/{id}', [ClienteController::class, 'eliminarCli']);