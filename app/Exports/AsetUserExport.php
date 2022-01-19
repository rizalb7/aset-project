<?php

namespace App\Exports;

use App\Models\Aset;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class AsetUserExport implements FromQuery
{
    use Exportable;

    public function __construct(int $user_id)
    {
        $this->user_id = $user_id;
    }

    public function query()
    {
        return Aset::query()->where('user_id', $this->user_id);
    }
}
