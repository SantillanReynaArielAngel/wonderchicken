<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('personas', 'PersonaController@index'); //todos los usuarios -> R
Route::get('personas/{id}'); // un usuario por id -> R
Route::post('personas', 'PersonaController@store'); // crear un nuevo usuario -> C
// actualizar usuarios
// Route::patch('personas/{id}');
Route::put('personas/{id}'); // actualizar -> U
Route::delete('personas/{id}'); // eliminar un usuario -> D

// CLIENTE
Route::post('clientes/{cliente}/pedidos', 'Cliente\ClientePedidoController@store');
