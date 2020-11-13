<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MeterPointSeed::class);
        $this->call(MeterPointPartnerSeed::class);
        $this->call(PartnerSeed::class);
    }
}
