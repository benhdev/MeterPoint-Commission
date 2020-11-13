<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MeterPointPartner extends Pivot
{
    protected $fillable = ['partner_id', 'meter_point_id'];
}
