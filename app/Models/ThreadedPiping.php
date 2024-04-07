<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThreadedPiping extends Model
{
    protected $table = 'threaded_piping';

    protected $fillable = [
        'basic_details_id',
        'customer_avl_applies',
        'material_origin_reqs',
        'origin_traceable_to_melt',
        'acceptable_material_origins',
        'standard_per_code',
        'mtrs_required',
        'heat_mapping',
        'material_notes',
        'nace',
        'notes'
    ];
}
