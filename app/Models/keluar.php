<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluar extends Model
{
    use HasFactory;

    protected $table = 'keluars';

    protected $fillable = ['namaBarang', 'stokBarang', 'type', 'deskripsi', 'berat', 'harga', 'totalHarga', 'jumlahStok', 'tanggal'];

    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'updated_at';
}
