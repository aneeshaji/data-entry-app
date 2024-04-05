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
        Schema::create('special_material_requirements', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_details_id')->comment('Refers basic_details -> id');
            $table->tinyInteger('pipes_and_fittings')->default(1)->comment('1 => Yes, 0 => No');
            $table->tinyInteger('bolting')->default(1)->comment('1 => Yes, 0 => No');
            $table->tinyInteger('pressure_vessels')->default(1)->comment('1 => Yes, 0 => No');
            $table->tinyInteger('gaskets')->default(1)->comment('1 => Yes, 0 => No');
            $table->tinyInteger('structural_steel')->default(1)->comment('1 => Yes, 0 => No');
            $table->tinyInteger('tubing')->default(1)->comment('1 => Yes, 0 => No');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_material_requirements');
    }
};
