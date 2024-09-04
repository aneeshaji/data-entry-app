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
        'nde_reports_comments',
        'status_of_docs_deliverables_mtrs',
        'status_of_docs_deliverables_nde',
        'status_of_docs_deliverables_hydro',
        'status_of_docs_deliverables_heat_map',
        'status_of_docs_deliverables_weld_map',
        'traveller_completed_status'
    ];

    /**
     * Get Basic Details Data.
     */
    public function basicDetails()
    {
        return $this->belongsTo(BasicDetails::class, 'basic_details_id', 'id');
    }


    /**
     * Get MTR's Doc Status.
     */
    public function mtrsStatus()
    {
        return $this->belongsTo(DocumentDeliverablesStatus::class, 'status_of_docs_deliverables_mtrs', 'id');
    }

    /**
     * Get NDE Doc Status.
     */
    public function ndeStatus()
    {
        return $this->belongsTo(DocumentDeliverablesStatus::class, 'status_of_docs_deliverables_nde', 'id');
    }

    /**
     * Get Hydro Doc Status.
     */
    public function hydroStatus()
    {
        return $this->belongsTo(DocumentDeliverablesStatus::class, 'status_of_docs_deliverables_hydro', 'id');
    }

    /**
     * Get Heat Map Doc Status.
     */
    public function heatMapStatus()
    {
        return $this->belongsTo(DocumentDeliverablesStatus::class, 'status_of_docs_deliverables_heat_map', 'id');
    }

    /**
     * Get Weld Map Doc Status.
     */
    public function weldMapStatus()
    {
        return $this->belongsTo(DocumentDeliverablesStatus::class, 'status_of_docs_deliverables_weld_map', 'id');
    }
}
