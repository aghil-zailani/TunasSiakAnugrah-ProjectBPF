<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keluar;

class HistoryBarangKeluar extends Controller
{
    public function index()
    {
        $data = array(
            'judul' => 'History Barang Keluar',
            'barang' => keluar::all(),
        );
        return view('historyBarangKeluar', $data);
    }
}
