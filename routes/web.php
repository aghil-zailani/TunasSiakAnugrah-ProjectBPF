<?php

use App\Http\Controllers\AparController;
use Illuminate\Support\Facades\Route;
use App\Models\AparModel;

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

Route::get('/', [AparController::class, 'index']);

Route::get('/Input', function () {
    return view('input', [
        "judul" => "Input"
    ]);
});

Route::get('/DataBarang', function () {
    return view('dataBarang', [
        "judul" => "Data Barang"
    ]);
});

Route::get('/BarangMasuk', function () {
    return view('barangMasuk', [
        "judul" => "Stok Barang"
    ]);
});

Route::get('/BarangKeluar', function () {
    return view('barangKeluar', [
        "judul" => "Barang Keluar"
    ]);
});

Route::get('/Detail', function () {
    return view('detail', [
        "judul" => "Detail Barang"
    ]);
});

Route::get('/MailBox', function () {
    return view('input', [
        "judul" => "Kotak Pesan"
    ]);
});

Route::get('/Login', function () {
    return view('login/login', [
        "judul" => "Login"
    ]);
});

Route::get('/Logout', function () {
    return view('logout');
});


Route::resource('input', AparController::class);