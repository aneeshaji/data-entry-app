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
        Schema::table('pressure_vessels', function (Blueprint $table) {
            $table->tinyInteger('traveller_completed_status')->nullable()->comment('1 => Completed, 0 => Pending')->after('status_of_docs_deliverables_weld_map');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pressure_vessels', function (Blueprint $table) {
            //
        });
    }
};
