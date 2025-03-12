<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]); 
    

    User::create([
        'name' => 'Kapolres',
        'nrp' => '1',
        'password' => bcrypt('12345'),
        'position_id' => 1,
        'department_id' => 1,
    ]);

    User::create([
        'name' => 'Wakil Kapolres',
        'nrp' => '2',
        'password' => bcrypt('12345'),
        'position_id' => 2,
        'department_id' => 1,
    ]);

    User::create([
        'name' => 'Admin SDM',
        'nrp' => '3',
        'password' => bcrypt('12345'),
        'position_id' => 3,
        'department_id' => 1,
    ]);

    User::create([
        'name' => 'Kepala Satuan',
        'nrp' => '4',
        'password' => bcrypt('12345'),
        'position_id' => 4,
        'department_id' => 1,
    ]);

    User::create([
        'name' => 'Kepala Bagian',
        'nrp' => '5',
        'password' => bcrypt('12345'),
        'position_id' => 5,
        'department_id' => 1,
    ]);

    User::create([
        'name' => 'Anggota Polisi',
        'nrp' => '6',
        'password' => bcrypt('12345'),
        'position_id' => 6,
        'department_id' => 1,
    ]);

    User::create([
        'name' => 'PNS',
        'nrp' => '7',
        'password' => bcrypt('12345'),
        'position_id' => 7,
        'department_id' => 1,
    ]);

    DB::table('leave_types')->insert([
        [
            'id' => 1,
            'type' => 'Cuti Tahunan'
        ],
        [
            'id' => 2,
            'type' => 'Cuti Sakit'
        ],
        [
            'id' => 3,
            'type' => 'Cuti Istimewah'
        ],
        [
            'id' => 4,
            'type' => 'Cuti Ibadah Keagamaan'
        ],
        [
            'id' => 5,
            'type' => 'Cuti MeLahirkan'
        ],
        [
            'id' => 6,
            'type' => 'Cuti Di luar Tanggungan Negara'
        ],
        [
            'id' => 7,
            'type' => 'Cuti Karena Alasan Penting'
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
            'name' => 'Kepala Satuan'
        ],
        [
            'id' => 5,
            'name' => 'Kepala Bagian'
        ],
        [
            'id' => 6,
            'name' => 'Anggota Polisi'
        ],
        [
            'id' => 7,
            'name' => 'PNS'
        ],
    ]);

    DB::table('departments')->insert([
        [
            'id' => 1,
            'name' => 'Samapta'
        ],
    ]);


    }
}