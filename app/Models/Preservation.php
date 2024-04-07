<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preservation extends Model
{
    protected $table ='preservation';

    protected $fillable = [
        'basic_details_id',
        'efx_standard_short_term',
        'efx_standard_long_term',
        'customer_specified_other',
        'special_customer_requirements',
        'notes'
    ];
}
