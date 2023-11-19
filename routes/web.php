<?php

use App\Http\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\TanggapanController;

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
    return view('Landingpage.home');
});
Route::get('/home', function () {
    return view('Landingpage.home');
});

// ADMIN
Route::get('/dashboard_admin',[DashboardAdminController::class,'index']);
Route::get('/excel-export',[DashboardAdminController::class,'export'])->name('excel-export');

Route::controller(TanggapanController::class)->group(function() {
  Route::get('/data_pengaduan', 'index');
  Route::get('/data_user', 'data_user');
  Route::get('/show_data/{id}', 'show')->name('show_data.show');
  Route::put('/update_data/{id}','update');
});


// MASYARAKAT
Route::get('/dashboard_masyarakat', function () {
  return view('Masyarakat.dashboard_masyarakat');
});

Route::get('/profile_masyarakat', function () {
  return view('Masyarakat.profile_masyarakat');
});

Route::controller(HistoriController::class)->group(function() {
  Route::get('/histori_pengaduan', 'index');
  Route::get('/ajukan_pengaduan', 'viewForm');
  Route::post('/store', 'store')->name('store');
  Route::get('/detail_pengaduan/{id}','show')->name('histori.show');
});