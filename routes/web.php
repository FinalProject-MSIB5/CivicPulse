<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardMasyarakatController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// REGISTER
Route::get('/registrasi', [RegistrasiController::class, 'Registrasi'])->name('registrasi');
Route::post('/registrasi/post', [RegistrasiController::class, 'createRegistrasi']);

// ADMIN
Route::get('/dashboard_admin',[DashboardAdminController::class,'index'])->name('dashboard_admin')->middleware('Permission:admin');
Route::get('/excel-export',[DashboardAdminController::class,'export'])->name('excel-export');

Route::controller(TanggapanController::class)->group(function() {
  Route::get('/data_pengaduan', 'index');
  Route::get('/data_user', 'data_user');
  Route::get('/show_data/{id}', 'show')->name('show_data.show');
  Route::put('/update_data/{id}','update');
  Route::delete('/delete/{id}', 'delete')->name('delete');
});

// MASYARAKAT
Route::get('/dashboard_masyarakat',[DashboardMasyarakatController::class,'index'])->name('dashboard_masyarakat')->middleware('Permission:masyarakat');

Route::controller(DashboardMasyarakatController::class)->group(function() {
  Route::get('/profile_masyarakat', 'profile');
  Route::put('/update_profile/{id}','update')->name('update_profile');
});
Route::controller(HistoriController::class)->group(function() {
  Route::get('/histori_pengaduan', 'index');
  Route::get('/ajukan_pengaduan', 'viewForm');
  Route::post('/store', 'store')->name('store');
  Route::get('/detail_pengaduan/{id}','show')->name('histori.show');
});