<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PressureVessels extends Model
{
    protected $fillable = [
        'basic_details_id',
        'customer_avl_applies',
        'material_origin_reqs',
        'origin_traceable_to_melt',
        'acceptable_material_origins',
        'mtrs_required',
        'heat_mapping',
        'weld_mapping',
        'material_notes',
        'nace',
        'nde_requirements_required',
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
        'notes',
        'date_of_confirmation',
        'nde_reports_comments'
    ];

    /**
     * Get Basic Details Data.
     */
    public function basicDetails()
    {
        return $this->belongsTo(BasicDetails::class, 'basic_details_id', 'id');
    }
}
