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
        Schema::table('non_code_vessels_tanks', function (Blueprint $table) {
            $table->string('nde_requirements_required')->after('notes')->nullable();
            $table->date('date_of_confirmation')->nullable()->after('nde_requirements_required');
            $table->text('nde_reports_comments')->nullable()->after('date_of_confirmation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('non_code_vessels_tanks', function (Blueprint $table) {
            //
        });
    }
};
