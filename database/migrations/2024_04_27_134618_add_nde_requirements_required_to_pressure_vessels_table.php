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
            $table->tinyInteger('nde_requirements_required')->nullable()->comment('1 => Yes, 0 => No')->after('nace');
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