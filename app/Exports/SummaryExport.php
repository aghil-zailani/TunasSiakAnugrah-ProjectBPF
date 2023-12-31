<?php

namespace App\Exports;

use App\Models\summary;
use Maatwebsite\Excel\Concerns\FromCollection;

class SummaryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return summary::all();
    }
}
