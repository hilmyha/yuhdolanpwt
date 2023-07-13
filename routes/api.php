<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\DestinasiController;
use App\Http\Controllers\API\UlasanController;
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

// auth routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// public routes
Route::apiResource('destinasi', DestinasiController::class)->only('index', 'show');
Route::apiResource('category', CategoryController::class)->only('index', 'show');

// protected routes
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::apiResource('destinasi', DestinasiController::class)->except('index', 'show');
    Route::apiResource('ulasan', UlasanController::class)->except('show');
});