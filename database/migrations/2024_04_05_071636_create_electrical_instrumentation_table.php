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
        Schema::create('electrical_instrumentation', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_details_id')->comment('Refers basic_details -> id');
            $table->tinyInteger('customer_avl_applies')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('acceptable_material_origins')->nullable();
            $table->string('vendor_restrictions')->nullable();
            $table->tinyInteger('specify')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('approved_vendors')->nullable();
            $table->text('material_notes')->nullable();
            $table->text('governing_code')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('electrical_instrumentation');
    }
};
