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
