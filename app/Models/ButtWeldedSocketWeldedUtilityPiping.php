<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ButtWeldedSocketWeldedUtilityPiping extends Model
{
    protected $fillable = [
        'basic_details_id',
        'customer_avl_applies',
        'material_origin_reqs',
        'origin_traceable_to_melt',
        'acceptable_material_origins',
        'standard_per_code',
        'mtrs_provided',
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
    protected $table='butt_welded_socket_welded_utility_piping';
}
