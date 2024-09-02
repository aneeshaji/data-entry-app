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
        Schema::table('process_fuel_gas_start_gas_piping', function (Blueprint $table) {
            $table->string('status_of_docs_deliverables_nde')->after('nde_reports_comments')->nullable();
            $table->string('status_of_docs_deliverables_hydro')->after('status_of_docs_deliverables_nde')->nullable();
            $table->string('status_of_docs_deliverables_heat_map')->after('status_of_docs_deliverables_hydro')->nullable();
            $table->string('status_of_docs_deliverables_weld_map')->after('status_of_docs_deliverables_heat_map')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('process_fuel_gas_start_gas_piping', function (Blueprint $table) {
            //
        });
    }
};
