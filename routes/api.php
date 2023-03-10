<?php

use App\Http\Controllers\Api\ApiController;
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
// Public routes
Route::get('/v1/books/', [ApiController::class, 'index']);
Route::get('/v1/books/{id}', [ApiController::class, 'show']);
Route::patch('/v1/books/{id}', [ApiController::class, 'update']);
Route::delete('/v1/books/{id}', [ApiController::class, 'delete']);


// Protected routes
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


