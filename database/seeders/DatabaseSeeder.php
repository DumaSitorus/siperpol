<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{

        User::create([
            'name' => 'Admin SDM',
            'nrp' => '3',
            'pangkat' => 'AKP',
            'password' => bcrypt('12345'),
            'position_id' => 3,
            'department_id' => 3,
        ]);


        DB::table('leave_types')->insert([
            [
                'id' => 1,
                'type' => '[Cuti] Tahunan'
            ],
            [
                'id' => 2,
                'type' => '[Cuti] Sakit'
            ],
            [
                'id' => 3,
                'type' => '[Cuti] Istimewah'
            ],
            [
                'id' => 4,
                'type' => '[Cuti] Ibadah Keagamaan'
            ],
            [
                'id' => 5,
                'type' => '[Cuti] MeLahirkan'
            ],
            [
                'id' => 6,
                'type' => '[Cuti] Di luar Tanggungan Negara'
            ],
            [
                'id' => 7,
                'type' => '[Cuti] Karena Alasan Penting'
            ],
            [
                'id' => 8,
                'type' => '[Izin] Menghadiri undangan seminar, lokakarya, studi banding, atau kegiatan akademis'
            ],
            [
                'id' => 9,
                'type' => '[Izin] Berobat Sakit'
            ],
            [
                'id' => 10,
                'type' => '[Izin] Mengantar/Menjemput Orang Sakit'
            ],
            [
                'id' => 11,
                'type' => '[Izin] Mengantar/Mengambil Jenazah'
            ],
            [
                'id' => 12,
                'type' => '[Izin] Kepentingan Pribadi (Dalam rangka berobat)'
            ],
        ]);

        DB::table('positions')->insert([
            [
                'id' => 1,
                'name' => 'Kapolres'
            ],
            [
                'id' => 2,
                'name' => 'Wakil Kapolres'
            ],
            [
                'id' => 3,
                'name' => 'Admin-sdm'
            ],
            [
                'id' => 4,
                'name' => 'Kepala Fungsi'
            ],
            [
                'id' => 5,
                'name' => 'Anggota Polisi'
            ],
            [
                'id' => 6,
                'name' => 'PNS'
            ],
        ]);

        DB::table('leave_statuses')->insert([
            [
                'id' => 1,
                'status' => 'Diajukan',
                'information' => 'Menunggu Persetujuan kepala Fungsi',
            ],
            [
                'id' => 2,
                'status' => 'Disetujui Kepala Fungsi',
                'information' => 'Menunggu Persetujuan pihak Bagian SDM',
            ],
            [
                'id' => 3,
                'status' => 'Ditolak Kepala Fungsi',
                'information' => 'Cuti/Izin tidak diterima Kepala Fungsi',
            ],
            [
                'id' => 4,
                'status' => 'Disetujui SDM',
                'information' => 'Menunggu Persetujuan Kapolres',
            ],
            [
                'id' => 5,
                'status' => 'Ditolak SDM',
                'information' => 'Cuti/Izin tidak diterima oleh pihak SDM',
            ],
            [
                'id' => 6,
                'status' => 'Disetujui Kapolres/Wakapolres',
                'information' => 'Diizinkan untuk mengambil cuti',
            ],
            [
                'id' => 7,
                'status' => 'Ditolak Kapolres/Wakapolres',
                'information' => 'Tidak Diizinkan untuk mengambil cuti',
            ],
        ]);
    }
}