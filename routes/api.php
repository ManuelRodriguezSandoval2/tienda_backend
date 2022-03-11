<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/obtener_producto_categoria', [CategoryController::class, 'obtenerProductoCategoria']);
Route::get('/obtener_producto', [ProductController::class, 'obtenerProducto']);
Route::get('/obtener_producto_nombre', [ProductController::class, 'obtenerProductoNombre']);
Route::get('/obtener_lista_productos', [ProductController::class, 'obtenerListaProductos']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
