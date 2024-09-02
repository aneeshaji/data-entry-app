<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('basic_details', function (Blueprint $table) {
            $table->dropColumn(
                [
                    'status_of_docs_deliverables_mtrs', 
                    'status_of_docs_deliverables_nde',
                    'status_of_docs_deliverables_hydro',
                    'status_of_docs_deliverables_heat_map',
                    'status_of_docs_deliverables_weld_map'
                ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('basic_details', function (Blueprint $table) {
            //
        });
    }
};
