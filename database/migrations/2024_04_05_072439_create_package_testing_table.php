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
        Schema::create('package_testing', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_details_id')->comment('Refers basic_details -> id');
            $table->tinyInteger('pneumatic_testing')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('pneumatic_testing_customer_third_party_witness_required')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('pneumatic_testing_notification_requirement')->nullable();
            $table->string('system')->nullable();
            $table->string('test_medium')->nullable();
            $table->string('test_requirement_pressure')->nullable();
            $table->string('test_requirement_time')->nullable();
            $table->string('pneumatic_testing_notes')->nullable();
            $table->string('vaccum')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('vaccum_customer_third_party_witness_required')->nullable()->comment('1 => Yes, 0 => No');
            $table->text('vaccum_notification_requirement')->nullable();
            $table->string('level')->nullable();
            $table->string('duration_at_level')->nullable();
            $table->text('vaccum_notes')->nullable();
            $table->string('purge_charge')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('purge_charge_medium')->nullable();
            $table->string('purge_charge_pressure')->nullable();
            $table->text('purge_charge_notes')->nullable();
            $table->text('lube_oil_flush')->nullable();
            $table->tinyInteger('lube_oil_flush_customer_third_party_witness_required')->nullable()->comment('1 => Yes, 0 => No');
            $table->text('lube_oil_flush_notification_requirement')->nullable();
            $table->text('lube_oil_flush_notes')->nullable();
            $table->tinyInteger('run_test')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('run_test_customer_third_party_witness_required')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('run_test_notification_requirement')->nullable();
            $table->tinyInteger('run_test_requirement')->nullable()->comment('1 => Loaded, 2 => No Load');
            $table->string('run_test_duration')->nullable();
            $table->text('run_test_notes')->nullable();
            $table->tinyInteger('megger_test')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('megger_test_customer_third_party_witness_required')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('megger_test_notification_requirement')->nullable();
            $table->text('megger_test_notes')->nullable();
            $table->tinyInteger('fat_test')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('fat_test_customer_third_party_witness_required')->nullable();
            $table->string('fat_test_notification_requirement')->nullable();
            $table->string('fat_test_requirement')->nullable();
            $table->text('fat_test_notes')->nullable();
            $table->tinyInteger('additional_testing')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('additional_testing_customer_third_party_witness_required')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('additional_testing_notification_requirement')->nullable();
            $table->string('additional_testing_test_requirement')->nullable();
            $table->tinyInteger('addendum_purchasing_specifications')->nullable()->comment('1 => Yes, 0 => No');
            $table->tinyInteger('addendum_purchasing_specifications_complete')->nullable()->comment('1 => Yes, 0 => No');
            $table->text('addendum_purchasing_specifications_notes')->nullable();
            $table->tinyInteger('addendum_manufacturing_specifications')->nullable()->comment('1 => Yes, 0 => No');
            $table->string('addendum_manufacturing_specifications_complete')->nullable();
            $table->text('addendum_manufacturing_specifications_notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_testing');
    }
};
