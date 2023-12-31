<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class summary extends Model
{
    use HasFactory;

    protected $table = 'summaries';

    protected $fillable = ['namaBarang', 'stokBarang', 'type', 'deskripsi', 'berat', 'harga', 'jumlahStok', 'status', 'tanggal'];

    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'updated_at';

}
