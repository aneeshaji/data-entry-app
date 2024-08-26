<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NdeReportsRequiredStatus extends Model
{
    protected $fillable = [
        'name',
        'description',
        'code'
    ];

}