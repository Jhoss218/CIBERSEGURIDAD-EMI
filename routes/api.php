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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * para la inscripcion
 */
Route::post('inscripcion', [
    'uses'  => 'App\Http\Controllers\InscripcionController@storeKardex',
    'as'    => 'api.inscripcion.storeKardex'
]);

Route::get('horarios', [
    'uses'  => 'App\Http\Controllers\InscripcionController@getHorarios',
    'as'    => 'api.inscripcion.getHorarios'
]);
