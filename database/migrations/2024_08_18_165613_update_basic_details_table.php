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
            $table->string('module_number')->after('due_date');
            $table->string('revision_number')->after('module_number');
            $table->date('customer_order_purchase_date')->nullable()->after('revision_number');
            $table->string('production_number')->nullable()->after('customer_order_purchase_date');
            $table->date('scheduled_test_date')->after('production_number')->after('production_number');
            $table->date('document_deliverables_due_date')->nullable()->after('scheduled_test_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('basic_details', function (Blueprint $table) {
            //
        });
    }
};
