<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'caption',
        'category',
        'image_path',
        'technician',
        'completion_date',
        'status',
        'visibility',
    ];

    protected $casts = [
        'completion_date' => 'date',
    ];
}
