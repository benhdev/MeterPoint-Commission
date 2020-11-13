<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\MeterPoint;
use Carbon\Carbon;

class MeterPointSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MeterPoint::insert([
            [
                'meterpoint' => 'abc',
                'consumption' => 12,
                'uplift' => 97,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'meterpoint' => 'def',
                'consumption' => 3,
                'uplift' => 47,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
