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
            $table->renameColumn('module_number', 'no_of_modules');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('basic_details', function (Blueprint $table) {
            $table->renameColumn('no_of_modules', 'module_number');
        });
    }
};
