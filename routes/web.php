<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\back\postController;
use App\Http\Controllers\dashboardController;

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

Route::get('/',[dashboardController::class,'index']);
Route::post('/postdata',[dashboardController::class,'postdata']);
Route::get('/reportSetoran',[dashboardController::class,'reportSetoran']);



