<?php

namespace App\Exports;

use App\Models\Maps;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MapsExport implements FromCollection,WithHeadingRow
{
    public function collection()
    {
        return Maps::all();
    }
}

?>