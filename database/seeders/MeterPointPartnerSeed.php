<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\MeterPointPartner;
use Carbon\Carbon;

class MeterPointPartnerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MeterPointPartner::insert([
            [
                'partner_id' => 1,
                'meter_point_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'partner_id' => 1,
                'meter_point_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
