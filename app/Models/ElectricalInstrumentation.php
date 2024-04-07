<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ElectricalInstrumentation extends Model
{
    protected $table ='electrical_instrumentation';

    protected $fillable = [
        'basic_details_id',
        'customer_avl_applies',
        'acceptable_material_origins',
        'vendor_restrictions',
        'specify',
        'approved_vendors',
        'material_notes',
        'governing_code',
        'notes'
    ];
}
