<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements WithMapping, WithHeadings, FromQuery
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function query()
    {
        return User::with(['position', 'department']);
    }

    public function map($users): array
    {
        return [
            $users->name,
            $users->nrp,
            $users->position ? $users->position->name : 'N/A',
            $users->department ? $users->department->name : 'N/A',
        ];
    }

    public function headings(): array
    {
        return [
            'Nama',
            'NRP',
            'Posisi',
            'Satuan/Bagian'
        ];
    }
}
