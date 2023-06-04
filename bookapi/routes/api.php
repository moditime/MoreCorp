<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\TokenController;

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
Route::post('/sanctum/token', TokenController::class);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/book', [BookingsController::class, 'store']);
    //Route::get('/users/auth', AuthController::class);
});
Route::get('/', [BookingsController::class, 'index']);
