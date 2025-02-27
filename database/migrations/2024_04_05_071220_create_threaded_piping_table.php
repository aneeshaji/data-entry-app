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
        Schema::create('threaded_piping', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_details_id')->comment('Refers basic_details -> id');
            $table->tinyInteger('customer_avl_applies')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('material_origin_reqs')->nullable();
            $table->string('origin_traceable_to_melt')->nullable();
            $table->string('acceptable_material_origins')->nullable();
            $table->tinyInteger('standard_per_code')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('mtrs_required')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('heat_mapping')->nullable()->comment('1 => Yes, 0 => No');
            $table->text('material_notes')->nullable();
            $table->tinyInteger('nace')->nullable()->comment('1 => Yes, 0 => No');
            $table->text('notes')->nullable();
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('threaded_piping');
    }
};
