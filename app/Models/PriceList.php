<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceList extends Model
{
    protected $fillable = [
        'service_name',
        'device_model',
        'category',
        'price',
        'description',
        'status',
    ];
}
