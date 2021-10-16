<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710054', 
            'name' => 'Diska Oktavia', 
            'class' => 'MI-2E',
            'department' => 'JTI', 
            'phone_number' => '088996538919',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710174', 
            'name' => 'Edo Galih Rispianto', 
            'class' => 'MI-2E',
            'department' => 'JTI', 
            'phone_number' => '089655209395',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710012', 
            'name' => 'Erina Seviyanti', 
            'class' => 'MI-2E',
            'department' => 'JTI', 
            'phone_number' => '087739772017',
        ]);
    }
}
