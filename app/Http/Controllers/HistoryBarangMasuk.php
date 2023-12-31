<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stok;

class HistoryBarangMasuk extends Controller
{
    public function index()
    {
        $data = array(
            'judul' => 'History Barang Masuk',
            'barang' => stok::all(),
        );
        return view('historyBarangMasuk', $data);
    }
}
