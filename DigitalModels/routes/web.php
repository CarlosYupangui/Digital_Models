<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PrincipalController;

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

Route::get('/cliente', [ClienteController::class, 'indexCli']);
Route::post('/guardar_info_Cli', [ClienteController::class, 'guardarCliente']);
Route::get('/infoCliente', [ClienteController::class, 'infoCliente']);
Route::get('/editarCli/{id}', [ClienteController::class, 'editarCli']);
Route::put('/actualizarInfoCli/{id}', [ClienteController::class, 'actualizarCli']);
Route::delete('/eliminarCli/{id}', [ClienteController::class, 'eliminarCli']);

Route::get('/producto', [ProductoController::class, 'indexPro']);
Route::post('/guardar_info_Pro', [ProductoController::class, 'guardarProducto']);
Route::get('/infoProducto', [ProductoController::class, 'infoProducto']);
Route::get('/editarPro/{id}', [ProductoController::class, 'editarPro']);
Route::put('/actualizarInfoPro/{id}', [ProductoController::class, 'actualizarPro']);
Route::delete('/eliminarPro/{id}', [ProductoController::class, 'eliminarPro']);

Route::get('/principal', [PrincipalController::class, 'indexPrin']);