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
            $table->tinyInteger('pressure_vessel_traveller_completed_status')->nullable()->comment('1 => Yes, 0 => No')->after('company_logo');
            $table->tinyInteger('piping_traveller_completed_status')->nullable()->comment('1 => Yes, 0 => No')->after('pressure_vessel_traveller_completed_status');
            $table->tinyInteger('non_code_vessels_traveller_completed_status')->nullable()->comment('1 => Yes, 0 => No')->after('piping_traveller_completed_status');
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
