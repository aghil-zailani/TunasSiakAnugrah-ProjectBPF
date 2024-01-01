<?php

use App\Http\Controllers\AparController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\HistoryBarangMasuk;
use App\Http\Controllers\HistoryBarangKeluar;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\AparModel;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [AparController::class, 'index'])->name('home')->middleware('auth');
Route::get('/dataBarang', [AparController::class, 'tampil'])->name('dataBarang')->middleware('auth');
Route::get('/dataBarang/exportExcel', [AparController::class, 'exportExcel'])->name('exportExcel');
Route::delete('/dataBarang/hapus/{id}', [AparController::class, 'destroy'])->name('destroy')->middleware('auth');


Route::get('/input', [AparController::class, 'create'])->name('create')->middleware('auth');
Route::post('/input/store', [AparController::class, 'store'])->name('store')->middleware('auth');

Route::get('/stokBarang', [BarangMasukController::class, 'index'])->name('index')->middleware('auth');
Route::post('/stokBarang/store/{id}', [BarangMasukController::class, 'store'])->name('store')->middleware('auth');
Route::get('/stokBarang/exportExcel', [BarangMasukController::class, 'exportExcel'])->name('exportExcel');

Route::get('/barangKeluar', [BarangKeluarController::class, 'index'])->name('index')->middleware('auth');
Route::post('/barangKeluar/store/{id}', [BarangKeluarController::class, 'store'])->name('store')->middleware('auth');
Route::get('/barangKeluar/exportExcel', [BarangKeluarController::class, 'exportExcel'])->name('exportExcel');

Route::get('/historyBarangMasuk', [HistoryBarangMasuk::class, 'index'])->name('index')->middleware('auth');
Route::get('/historyBarangKeluar', [HistoryBarangKeluar::class, 'index'])->name('index')->middleware('auth');

Route::get('/summary', [SummaryController::class, 'index'])->name('index')->middleware('auth');
Route::get('/summary/exportExcel', [SummaryController::class, 'exportExcel'])->name('exportExcel');
Route::get('/summary/exportPDF', [SummaryController::class, 'exportPDF'])->name('exportPDF');

Route::resource('apar', AparController::class);
