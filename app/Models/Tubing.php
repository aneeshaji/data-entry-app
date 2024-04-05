<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tubing extends Model
{
    protected $fillable = [
        'basic_details_id',
        'customer_avl_applies',
        'material_origin_reqs',
        'origin_traceable_to_melt',
        'acceptable_material_origins',
        'efx_standard_no_cocs',
        'tubing_mtrs_required',
        'tubing_coc_required',
        'fitting_mtrs_required',
        'fitting_coc_required',
        'full_traceability',
        'material_notes',
        'nde_requirements',
        'pmi_Requirements',
        'notes'
    ];
}
//tubing