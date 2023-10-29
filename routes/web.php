<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomingProductController;
use App\Http\Controllers\ExitProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LaporanController;

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

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'proses'])->name('login.proses');
Route::view('/', 'welcome')->name('welcome')->middleware('auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('/incoming-product', IncomingProductController::class)->middleware('can:isAdmin');
Route::resource('/product', ProductController::class)->middleware('auth');
Route::resource('/exit-product', ExitProductController::class)->middleware('auth');
Route::resource('/laporan', LaporanController::class)->middleware('auth');
Route::get('laporan_masuk', [LaporanController::class, 'laporan_masuk'])->name('laporan_masuk');
Route::get('laporan_keluar', [LaporanController::class, 'laporan_keluar'])->name('laporan_keluar');
