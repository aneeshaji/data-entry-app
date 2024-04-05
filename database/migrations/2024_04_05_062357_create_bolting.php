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
        Schema::create('bolting', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_details_id')->comment('Refers basic_details -> id');
            $table->integer('efx_standard_no_cocs')->comment('Refers basic_details -> id');
            $table->tinyInteger('vendor_coc')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('manufacturer_coc')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('mtrs')->nullable()->comment('1 => Yes, 0 => No');
            $table->text('material_notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bolting');
    }
};
