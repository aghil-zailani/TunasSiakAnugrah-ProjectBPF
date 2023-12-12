<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AparModel extends Model
{
    use HasFactory;
    protected $fillable = ['namaBarang', 'stokBarang', 'type', 'deskripsi', 'berat', 'harga', 'foto'];
}
