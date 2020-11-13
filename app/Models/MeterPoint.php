<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeterPoint extends Model
{
    protected $fillable = ['meterpoint', 'consumption', 'uplift'];
}
