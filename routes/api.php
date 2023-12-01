<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\BookController;

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

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function()
{
    Route::get('/books', [BookController::class, 'books']);
    Route::post('/post_books', [BookController::class, 'store']);
    Route::match(['put', 'patch'],'/book/{id}',[BookController::class, 'update']);
    Route::post('/book/{id}', [BookController::class, 'destroy']);
});


