<?php

namespace App\Exports;

use App\Models\stok;
use Maatwebsite\Excel\Concerns\FromCollection;

class BarangMasukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return stok::all();
    }
}
