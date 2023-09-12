<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TSUsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'id', 'name', 'email', 'line_id', 'whatsapp', 'place_of_birth', 'date_of_birth', 'gender',  'company', 'created_at'
        ];
    }

    public function collection()
    {
        return DB::table('users')
            ->select('id', 'name', 'email', 'line_id', 'whatsapp', 'place_of_birth', 'date_of_birth', 'gender',  'company', 'created_at')
            ->where('is_admin', '=', '0')
            ->get();
    }
}
