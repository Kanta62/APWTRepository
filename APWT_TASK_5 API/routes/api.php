<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;
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



Route::get('/products/list',[DeliveryController::class,'APIList']);
// Route::get('/products/list/{id}',[APIController::class,'Search']);
Route::post('/products/list',[DeliveryController::class,'APIPost']);
Route::get('/changeinfo',[DeliveryController::class,'APIUpdate']);
// Route::post('/changeorder',[DeliveryController::class,'APIUpdateSubmit']);