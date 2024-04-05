<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialMaterialRequirements extends Model
{
    protected $fillable = [
        'basic_details_id',
        'pipes_and_fittings',
        'bolting',
        'pressure_vessels',
        'gaskets',
        'structural_steel',
        'tubing'
    ];
}
// SpecialMaterialRequirements