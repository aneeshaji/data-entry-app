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
            $table->date('jqr_revision_date')->after('status_of_docs_deliverables_weld_map')->nullable();
            $table->string('company_logo')->after('jqr_revision_date')->nullable();
            $table->string('form_number')->after('company_logo')->nullable();
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
