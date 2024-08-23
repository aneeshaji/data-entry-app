<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentDeliverablesStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('document_deliverables_statuses')->insert([
            [
                'name' => 'DD Completed', 
                'description' => 'All files for DD are in "P" drive',
                'highlight_color' => '#008000'
            ],
            [
                'name' => 'Shop Complete',
                'description' => 'All Shop Process Complete. Being readied for shipment to array',
                'highlight_color' => ''
            ],
            [
                'name' => 'Attention',
                'description' => 'Needs some review/attention of the DD',
                'highlight_color' => ''
            ],
            [
                'name' => 'Rework',
                'description' => 'More shop work needed',
                'highlight_color' => ''
            ],
            [
                'name' => 'Review',
                'description' => 'Requirements in JQR to be re-reviewed',
                'highlight_color' => ''
            ],
            [
                'name' => 'Outsourced',
                'description' => 'Item to be outsourced',
                'highlight_color' => ''
            ],
        ]);
    }
}
