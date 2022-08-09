<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\formulario;
use App\Http\Resources\formularioResource;
use App\Http\Controllers\formularioController;

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

Route::get('/formularios', function(){
    return formularioResource::collection(formulario::all());
});

Route::get('/formulario/{id}', function($id){
    return new formularioResource(formulario::findOrFail($id));
});

Route::post('/formulario', [formularioController::class, 'store']);

Route::put('/formulario/{id}', [formularioController::class, 'update']);

Route::delete('/formulario/{id}', [formularioController::class, 'destroy']);