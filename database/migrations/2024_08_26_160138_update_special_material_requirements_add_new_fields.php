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
        Schema::table('special_material_requirements', function (Blueprint $table) {
            $table->tinyInteger('q_stock_material')->nullable()->after('tubing')->comment('1 => Yes, 0 => No');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('special_material_requirements', function (Blueprint $table) {
            //
        });
    }
};
