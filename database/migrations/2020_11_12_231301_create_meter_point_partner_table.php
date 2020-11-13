<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeterPointPartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meter_point_partner', function (Blueprint $table) {
            $table->id();
            $table->integer('partner_id');
            
            /*
                Not really sure why the specification defines the meter_point_id as a float,
                it should be an integer.
            */
            $table->float('meter_point_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meter_point_partner');
    }
}
