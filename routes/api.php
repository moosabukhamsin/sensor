<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DoorReadingController;
use App\Http\Controllers\Api\TemperatureReadingController;
use App\Http\Controllers\StaticPageController;

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

Route::post('temperaturereading/store',[TemperatureReadingController::class,'store'] )->middleware(['guest']);
Route::post('doorreading/store', [DoorReadingController::class,'store'])->middleware(['guest']);
Route::get('get_lastest_data', [StaticPageController::class,'get_lastest_data'])->middleware(['guest']);