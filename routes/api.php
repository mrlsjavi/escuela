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

Route::get('alumnos', 'StudentController@index');
Route::post('alumnos', 'StudentController@store');

Route::post('asignar', 'AsignmentController@store');
Route::get('asignar/{asignment}/notas', 'ScoreController@edit');
Route::get('asignados', 'AsignmentController@index');

Route::Patch('punteos', 'ScoreController@update');

Route::get('ciclos', 'CycleController@index');
Route::get('grados', 'GradeController@index');