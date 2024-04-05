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
        Schema::create('preservation', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_details_id')->comment('Refers basic_details -> id');
            $table->tinyInteger('efx_standard_short_term')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('efx_standard_long_term')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('customer_specified_other')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('special_customer_requirements')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preservation');
    }
};
