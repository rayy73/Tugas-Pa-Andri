<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Facade;
use Illumintae\suppport\Facades\DB;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $departemen = [
            ['kodedepartemen'=>'110','nama_departemen' => 'IT'],
            ['kodedepartemen'=>'111','nama_departemen' => 'Logistics'],
            ['kodedepartemen'=>'112','nama_departemen' => 'HR'],
            

        ]; 
        FacadesDB::table('departemen')->insert($departemen);   
    }
}