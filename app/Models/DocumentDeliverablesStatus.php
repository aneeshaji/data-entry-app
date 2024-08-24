<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocumentDeliverablesStatus extends Model
{
    protected $fillable = [
        'name',
        'description',
        'highlight_color'
    ];

}