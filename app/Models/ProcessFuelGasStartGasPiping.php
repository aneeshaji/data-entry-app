<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcessFuelGasStartGasPiping extends Model
{
    protected $fillable = [
        'basic_details_id',
        'customer_avl_applies',
        'material_origin_reqs',
        'origin_traceable_to_melt',
        'acceptable_material_origins',
        'standard_code',
        'mtrs_required',
        'heat_mapping',
        'weld_mapping',
        'material_notes',
        'nace',
        'nde_requirements',
        'weld_requirements',
        'governing_code',
        'hydro_hold_time',
        'witnessed',
        'hardness_test',
        'max_hardness',
        'hydro_chart_required',
        'hydro_notes',
        'notes'
    ];
    protected $table = 'process_fuel_gas_start_gas_piping';
}

//process_fuel_gas_start_gas_piping