<?php

namespace App\Exports;

use App\Models\Leave;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class LeaveExport implements WithMapping, WithHeadings, FromQuery
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function query()
    {
        return Leave::with(['user', 'leave_status','leave_type']);
    }

    public function map($leaves): array
    {
        if (!$leaves->user || $leaves->user->trashed()) {
            return [];
        }

        return [
            $leaves->user->name,
            $leaves->user->nrp,
            $leaves->leave_type->type,
            $leaves->created_at,
            $leaves->start_leave,
            $leaves->end_leave,
            $leaves->notes ? $leaves->notes : '-',
            $leaves->leave_status->status,
            $leaves->rejection_reason ? $leaves->rejection_reason : '-',
        ];
    }

    public function headings(): array
    {
        return [
            'Nama Pengaju',
            'NRP Pengaju',
            'Jenis Cuti',
            'Diajukan Pada',
            'Tanggal awal cuti',
            'Tanggal terakhir cuti',
            'Catatan Cuti',
            'Status Cuti',
            'Alasan Tidak Diizinkan',
        ];
    }
}