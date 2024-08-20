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
            $table->date('date_of_confirmation')->nullable()->after('notes');
            $table->text('nde_reports_comments')->nullable()->after('date_of_confirmation');
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
