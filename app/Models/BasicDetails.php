<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BasicDetails extends Model
{
    protected $fillable = [
        'job_number',
        'job_name',
        'stages',
        'no_of_modules',
        'job_revision_number',
        'customer_order_purchase_date',
        'fab_start_date',
        'production_number',
        'scheduled_test_date',
        'document_deliverables_due_date	',
        'status_of_docs_deliverables_mtrs',
        'status_of_docs_deliverables_nde',
        'status_of_docs_deliverables_hydro',
        'status_of_docs_deliverables_heat_map',
        'status_of_docs_deliverables_weld_map',
        'jqr_revision_date',
        'form_number',
        'release_date',
        'issue_date',
        'status'
    ];

    /**
     * Get Pressure Vessels Data.
     */
    public function pressureVessels()
    {
        return $this->belongsTo(PressureVessels::class, 'id', 'basic_details_id');
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
