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
        Schema::create('process_fuel_gas_start_gas_piping', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_details_id')->comment('Refers basic_details -> id');
            $table->tinyInteger('customer_avl_applies')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('material_origin_reqs')->nullable();
            $table->string('origin_traceable_to_melt')->nullable();
            $table->string('acceptable_material_origins')->nullable();
            $table->tinyInteger('standard_code')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('mtrs_required')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('heat_mapping')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('weld_mapping')->nullable()->comment('1 => Yes, 0 => No');
            $table->text('material_notes')->nullable();
            $table->tinyInteger('nace')->nullable()->comment('1 => Yes, 0 => No');
            $table->text('nde_requirements')->nullable();
            $table->text('weld_requirements')->nullable();
            $table->string('governing_code')->nullable();
            $table->string('hydro_hold_time')->nullable();
            $table->string('witnessed')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('hardness_test')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('max_hardness')->nullable();
            $table->string('hydro_chart_required')->nullable();
            $table->text('hydro_notes')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process_fuel_gas_start_gas_piping');
    }
};
