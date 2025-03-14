<?php

namespace App\Imports;

use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {

        $errors = [];

        foreach ($rows as $index => $row) 
        {
            // Cek apakah NRP sudah ada di database
            $existingUser = User::where('nrp', $row['nrp'])->first();

            if ($existingUser) {
                $errors[] = "NRP {$row['nrp']} di baris " . ($index + 1) . " sudah terdaftar.";
                continue; // Lewati proses pembuatan user jika NRP sudah ada
            }

            // Cek apakah department dan posisi valid
            $department = Department::where('name', $row['satuan_bagian'])->first();
            $position = Position::where('name', $row['posisi'])->first();

            if (!$department || !$position) {
                $errors[] = "Satuan/Bagian atau Posisi tidak valid di baris " . ($index + 1);
                continue;
            }

            // Buat user baru jika validasi lolos
            User::create([
                'name'          => $row['nama'],
                'nrp'           => $row['nrp'],
                'password'      => Hash::make($row['nrp']), 
                'department_id' => $department->id,
                'position_id'   => $position->id,
                'profile_photo' => 'images/empty_profile_photo.png',
                'leave_quota'   => 12, 
            ]);
        }

        // Jika ada error, kembalikan pesan error ke session
        if (!empty($errors)) {
            session()->flash('import_errors', $errors);
        }
    }
}
