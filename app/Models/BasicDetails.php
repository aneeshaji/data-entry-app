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
        'jqr_revision_date',
        'form_number',
        'company_logo',
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
}
