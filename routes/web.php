<?php

use App\Http\Controllers\DashboardAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\LoginController;

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

// LOGIN
Route::get('/login', [SesiController::class, 'index'])->name('login');
Route::post('/login', [SesiController::class, 'login']);

Route::middleware(['auth'])->group(function () {
  Route::get('/logout', [SesiController::class, 'logout']);
  Route::get('/admin', [LoginController::class, 'admin'])->middleware('Permission:admin');
  Route::get('/masyarakat', [LoginController::class, 'masyarakat']);
});


// ADMIN
Route::get('/dashboard_admin',[DashboardAdminController::class,'index'])->name('dashboard_admin')->middleware('Permission:admin');
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
})->name('dashboard_masyarakat')->middleware('Permission:masyarakat');

Route::get('/profile_masyarakat', function () {
  return view('Masyarakat.profile_masyarakat');
});

Route::controller(HistoriController::class)->group(function() {
  Route::get('/histori_pengaduan', 'index');
  Route::get('/ajukan_pengaduan', 'viewForm');
  Route::post('/store', 'store')->name('store');
  Route::get('/detail_pengaduan/{id}','show')->name('histori.show');
});