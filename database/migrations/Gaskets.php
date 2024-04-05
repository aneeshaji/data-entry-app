<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gaskets extends Model
{
    protected $fillable = [
        'basic_details_id',
        'efx_standard_no_cocs',
        'vendor_coc',
        'manufacturer_coc',
        'mtrs',
        'notes'
    ];
}
//gaskets