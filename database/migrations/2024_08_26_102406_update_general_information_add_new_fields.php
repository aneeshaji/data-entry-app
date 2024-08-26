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
        Schema::table('general_information', function (Blueprint $table) {
            $table->date('req_fab_completetion_date')->after('notes');
            $table->tinyInteger('spoling_required')->nullable()->after('req_fab_completetion_date')->comment('1 => Yes, 0 => No');
            $table->tinyInteger('vessels_required')->nullable()->after('spoling_required')->comment('1 => Yes, 0 => No');
            $table->tinyInteger('vessels_outsourced')->nullable()->after('vessels_required')->comment('1 => Yes, 0 => No');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('general_information', function (Blueprint $table) {
            //
        });
    }
};
