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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/students', function() {
    return 'Obteniendo lista de estudiantes';
});


Route::get('/students/{id}', function() {
    return 'Obteniendo un estudiante';
});

Route::post('/students', function() {
    return 'Creando estudiantes';
});


Route::put('/students/{id}', function() {
    return 'Actualizando estudiantes';
});



Route::delete('/students/{id}', function() {
    return 'Eliminando estudiante';
});
