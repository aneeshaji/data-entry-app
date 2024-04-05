<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceInformation extends Model
{
    protected $fillable = [
        'basic_details_id',
        'gas_processed',
        'application',
        'sour_service_required',
        'other',
        'notes'
    ];
}
