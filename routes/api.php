<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\OrganizerController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailController;

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

Route::apiResource('event', EventController::class);
Route::apiResource('organizer', OrganizerController::class);
Route::apiResource('participant', ParticipantController::class);
Route::apiResource('user', UserController::class);
Route::apiResource('userdetail', UserDetailController::class);

// Ruta para agregar un participante a un evento(attach)
// Route::post('/event/{event}/ participants/{participant}',
// [EventController::class, 'attachParticipant']);

// // Ruta para eliminar un participante de un evento(detach)
// Route::delete('/event/{event}/ participants/{participant}',
// [EventController::class, 'detachParticipant']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
