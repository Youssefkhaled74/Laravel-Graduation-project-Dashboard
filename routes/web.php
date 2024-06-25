<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FlyingController;
use App\Http\Controllers\StaysController;
use App\Http\Controllers\AttractionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('index');
});

// Route::get('/stayes', [App\Http\Controllers\StaysController::class, 'index']);
// Route::get('/flying', [App\Http\Controllers\FlyingController::class, 'index']);
// Route::get('/cars', [App\Http\Controllers\CarsController::class, 'index']);

Route::resource('cars', CarsController::class);
Route::resource('customers', CustomerController::class);
Route::resource('flys', FlyingController::class);
Route::resource('stays', StaysController::class);
Route::resource('attractions', AttractionController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
