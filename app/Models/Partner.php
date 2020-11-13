<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name'];

    public function meterpoints()
    {
        return $this->belongsToMany('App\Models\MeterPoint')
            ->using('App\Models\MeterPointPartner')
            ->withPivot('id', 'created_at', 'updated_at');
    }
}
