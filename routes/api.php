<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\NoteController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/note', [NoteController::class, 'index']);
Route::post('/note', [NoteController::class, 'store']);
Route::get('/note/{id}', [NoteController::class, 'show']);
Route::delete('/note/{id}', [NoteController::class, 'destroy']);
Route::put('/note/{id}', [NoteController::class, 'update']);

