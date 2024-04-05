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
        Schema::create('general_information', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_details_id')->comment('Refers basic_details -> id');
            $table->string('customer')->nullable();
            $table->string('location')->nullable();
            $table->string('end_user')->nullable();
            $table->string('engineer')->nullable();
            $table->string('designer')->nullable();
            $table->string('sales_man')->nullable();
            $table->string('job_type')->nullable();
            $table->string('job_revision_number')->nullable();
            $table->date('date_revised')->nullable();
            $table->date('date_approved')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_information');
    }
};
