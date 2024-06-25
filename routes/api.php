<?php

use App\Http\Controllers\Api\CarsController;
use App\Http\Controllers\Api\CustomersController;
use App\Http\Controllers\Api\flyingsController;
use App\Http\Controllers\Api\StaysController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Api code
Route::get('GetAllCar',[CarsController::class,'index']);
Route::get('GetOneCar/{id}',[CarsController::class,'show']);
Route::post('CreateCar',[CarsController::class,'store']);
Route::post('UpdateCar/{id}',[CarsController::class,'update']);
Route::post('DestroyCar/{id}',[CarsController::class,'destroy']);


Route::get('GetAllStay',[StaysController::class,'index']);
Route::get('GetOneStay/{id}',[StaysController::class,'show']);
Route::post('CreateStay',[StaysController::class,'store']);
Route::post('UpdateStay/{id}',[StaysController::class,'update']);
Route::post('DestroyStay/{id}',[StaysController::class,'destroy']);


Route::get('GetAllFlying',[FlyingsController::class,'index']);
Route::get('GetOneFlying/{id}',[FlyingsController::class,'show']);
Route::post('CreateFlying',[FlyingsController::class,'store']);
Route::post('UpdateFlying/{id}',[FlyingsController::class,'update']);
Route::post('DestroyFlying/{id}',[FlyingsController::class,'destroy']);


Route::get('GetAllCustomer',[CustomersController::class,'index']);
Route::get('GetOneCustomer/{id}',[CustomersController::class,'show']);
Route::post('CreateCustomer',[CustomersController::class,'store']);
Route::post('UpdateCustomer/{id}',[CustomersController::class,'update']);
Route::post('DestroyCustomer/{id}',[CustomersController::class,'destroy']);

