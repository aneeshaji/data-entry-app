<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralInformation extends Model
{
    protected $fillable = [
        'basic_details_id',
        'customer',
        'location',
        'end_user',
        'engineer',
        'designer',
        'sales_man',
        'job_type',
        'job_revision_number',
        'date_revised',
        'date_approved',
        'notes'
    ];
}
