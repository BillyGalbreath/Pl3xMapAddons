<?php

use App\Http\Controllers\Api\AddonsController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::controller(AddonsController::class)->group(function () {
    Route::get('/addons', 'index');
    Route::get('/addons/{id}', 'show');

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/addons', 'store');
        Route::patch('/addons/{id}', 'update');
        Route::delete('/addons/{id}', 'destroy');
    });
});

//Route::apiResource('addons', AddonsController::class);
