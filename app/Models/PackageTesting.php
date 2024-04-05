<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageTesting extends Model
{
    protected $fillable = [
        'basic_details_id',
        'pneumatic_testing',
        'pneumatic_testing_customer_third_party_witness_required',
        'pneumatic_testing_notification_requirement',
        'system',
        'test_medium',
        'test_requirement_pressure',
        'test_requirement_time',
        'pneumatic_testing_notes',
        'vaccum',
        'vaccum_customer_third_party_witness_required',
        'vaccum_notification_requirement',
        'level',
        'duration_at_level',
        'vaccum_notes',
        'purge_charge',
        'purge_charge_medium',
        'purge_charge_pressure',
        'purge_charge_notes',
        'lube_oil_flush',
        'lube_oil_flush_customer_third_party_witness_required',
        'lube_oil_flush_notification_requirement',
        'lube_oil_flush_notes',
        'run_test',
        'run_test_customer_third_party_witness_required',
        'run_test_notification_requirement',
        'run_test_requirement',
        'run_test_requirement',
        'run_test_notes',
        'megger_test',
        'megger_test_customer_third_party_witness_required',
        'megger_test_notification_requirement',
        'megger_test_notes',
        'fat_test',
        'fat_test_customer_third_party_witness_required',
        'fat_test_notification_requirement',
        'fat_test_requirement',
        'fat_test_notes',
        'additional_testing',
        'additional_testing_customer_third_party_witness_required',
        'additional_testing_notification_requirement',
        'additional_testing_test_requirement',
        'addendum_purchasing_specifications',
        'addendum_purchasing_specifications_complete',
        'addendum_purchasing_specifications_notes',
        'addendum_manufacturing_specifications',
        'addendum_manufacturing_specifications_complete',
        'addendum_manufacturing_specifications_notes'
    ];
    protected $table = 'package_testing';
}
// PackageTesting