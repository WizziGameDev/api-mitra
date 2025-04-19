<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MitraController;

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

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});

// Mitra
Route::get('/mitras', [MitraController::class, 'index']);
Route::post('/mitras', [MitraController::class, 'store']);
Route::get('/mitras/{slug}', [MitraController::class, 'show']);
Route::put('/mitras/{slug}', [MitraController::class, 'update']);
Route::delete('/mitras/{slug}', [MitraController::class, 'destroy']);