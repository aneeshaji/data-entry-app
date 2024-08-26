<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NdeReportsRequiredStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nde_reports_required_statuses')->insert([
            [
                'name' => 'UNKNOWN', 
                'description' => 'JQR NOTAVAILABLE',
                'code' => '6'
            ],
            [
                'name' => 'EFXStandard (5%-15% RTOR PAUT)', 
                'description' => '10% RTON BW, 10% MT/PTON FILLET & BRANCH, 10% HARDNESS TESTAND 100% VT',
                'code' => '1'
            ],
            [
                'name' => '100% RTONLY', 
                'description' => '100% RADIOGRAPH INSPECTION',
                'code' => '4'
            ],
            [
                'name' => '100% RTOR PAUT', 
                'description' => '100% RTOR PAUTBUTTWELDS',
                'code' => '3'
            ],
            [
                'name' => 'NDE NOTREQUIRED', 
                'description' => 'PROCESS PIPING NOTREQUIRED',
                'code' => '7'
            ],
            [
                'name' => 'SPECIAL', 
                'description' => '100% X-RAYAND 10% DYE PENETRANTREQUIRED',
                'code' => '5'
            ],
            [
                'name' => '15% RTONLY', 
                'description' => 'RANDOM15% OF ALLBUTTWELDS SHALLRECEIVE, 100% RADIOGRAPH, EXAMINATION (PER B31.3)',
                'code' => '2'
            ]
        ]);
    }
}
