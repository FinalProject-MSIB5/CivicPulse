<?php

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
Route::controller(TanggapanController::class)->group(function() {
  Route::get('/data_pengaduan', 'index');
  Route::get('/data_user', 'data_user');
  Route::get('/show_data/{id}', 'show')->name('show_data.show');
  Route::put('/update_data/{id}','update');
 
});

Route::get('/dashboard', function () {
    return view('Admin.dashboard_admin');
});



Route::get('/profile_masyarakat', function () {
  return view('Masyarakat.profile_masyarakat');
});

Route::get('/detail_pengaduan/{id}',[HistoriController::class, 'show'])->name('histori.show');

// MASYARAKAT
Route::controller(HistoriController::class)->group(function() {
  Route::get('/histori_pengaduan', 'index');
  Route::get('/ajukan_pengaduan', 'viewForm');
  Route::post('/store', 'store')->name('store');
});


// Route::get('/histori_pengaduan',[HistoriController::class,'index']);
// Route::get('/ajukan_pengaduan',[HistoriController::class,'viewForm']);
// Route::post('/store',[HistoriController::class,'store'])->name('store');

// Route::resource('pengaduan',HistoriController::class);
