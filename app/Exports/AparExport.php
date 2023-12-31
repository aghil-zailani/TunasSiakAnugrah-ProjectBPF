<?php

namespace App\Exports;

use App\Models\AparModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class AparExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return AparModel::all();
    }
}
