<?php

namespace App\Exports;

use App\Models\keluar;
use Maatwebsite\Excel\Concerns\FromCollection;

class BarangKeluarExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return keluar::all();
    }
}
