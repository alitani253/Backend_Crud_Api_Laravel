<?php

use App\Http\Controllers\crud_apiAPIController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('crud_apis', [crud_apiAPIController::class, 'creerApi']);
Route::put('crud_apis/{id}', [crud_apiAPIController::class, 'miseajourApi']);
Route::delete('crud_apis/{id}', [crud_apiAPIController::class, 'supprimerApi']);
