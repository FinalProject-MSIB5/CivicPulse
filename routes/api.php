<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DataPengaduanController;
use App\Http\Controllers\Api\DataUserController;

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

// API Data User
Route::get('/dataUser', [DataUserController::class, 'index']);
Route::get('/dataUserId/{id}', [DataUserController::class, 'show']);
Route::post('/user-sigin', [DataUserController::class, 'create']);
Route::put('/user-update', [DataUserController::class, 'update']);


// API Data Pengaduan
Route::get('/Data-Pengaduan', [DataPengaduanController::class, 'index']);
Route::get('/Data-Pengaduan/{id}', [DataPengaduanController::class, 'show']);
Route::delete('/Data-Pengaduan/{id}', [DataPengaduanController::class, 'destroy']);
Route::put('/Data-Pengaduan/{id}', [DataPengaduanController::class, 'update']);
Route::post('/Data-Pengaduan', [DataPengaduanController::class, 'create']);