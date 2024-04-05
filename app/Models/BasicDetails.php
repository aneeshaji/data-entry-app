<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BasicDetails extends Model
{
    protected $fillable = [
        'job_name',
        'stages',
        'release_date',
        'issue_date',
        'status'
    ];
}
