<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExpedienteController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



//sin authenticated
Route::post('login',[LoginController::class, 'login']);
Route::post('user/registrar',[UserController::class, 'store']);



//authenticated

Route::get('persona',[PersonaController::class, 'index'])->middleware('auth:sanctum');
Route::post('persona/registrar',[PersonaController::class, 'store'])->middleware('auth:sanctum');
Route::put('persona/actualizar',[PersonaController::class, 'update'])->middleware('auth:sanctum');


Route::get('expediente',[ExpedienteController::class, 'index'])->middleware('auth:sanctum');
Route::post('expediente/registrar',[ExpedienteController::class, 'store'])->middleware('auth:sanctum');
Route::put('expediente/actualizar',[ExpedienteController::class, 'update'])->middleware('auth:sanctum');


Route::get('user',[UserController::class, 'index'])->middleware('auth:sanctum');
Route::put('user/actualizar',[UserController::class, 'update'])->middleware('auth:sanctum');
Route::put('user/desactivar',[UserController::class, 'desactivar'])->middleware('auth:sanctum');
Route::put('user/activar',[UserController::class, 'activar'])->middleware('auth:sanctum');

Route::get('rol',[RoleController::class, 'index'])->middleware('auth:sanctum');
Route::get('rol/selectrol',[RoleController::class, 'selectRol'])->middleware('auth:sanctum');

Route::get('/oficina',[OficinaController::class, 'index'])->middleware('auth:sanctum');
Route::post('oficina/registrar',[OficinaController::class, 'store'])->middleware('auth:sanctum');
Route::put('oficina/actualizar',[OficinaController::class, 'update'])->middleware('auth:sanctum');
Route::put('oficina/desactivar',[OficinaController::class, 'desactivar'])->middleware('auth:sanctum');
Route::put('oficina/activar',[OficinaController::class, 'activar'])->middleware('auth:sanctum');







