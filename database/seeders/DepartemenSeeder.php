<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departemen = [
            ['nama_departemen' => 'IT'],
            ['nama_departemen' => 'Logistics'],
            ['nama_departemen' => 'HR'],
        ];

        DB::table('departemen')->insert($departemen);
    }
}
