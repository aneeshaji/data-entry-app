<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NonCodeVesselsTanks extends Model
{
    protected $fillable = [
        'basic_details_id',
        'customer_avl_applies',
        'material_origin_reqs',
        'origin_traceable_to_melt',
        'origin_traceable_to_manufacturer',
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
        'pwht',
        'hydro_hold_time',
        'witnessed',
        'hardness_test',
        'max_hardness',
        'hydro_chart_required',
        'hydro_notes',
        'notes'
    ];
}

//non_code_vessels_tanks