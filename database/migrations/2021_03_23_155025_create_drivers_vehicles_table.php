<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversVehiclesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('drivers_vehicles') ) {

            Schema::create('drivers_vehicles', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->unsignedInteger('vehicle_id')->nullable()   ;                   $table->unsignedInteger('driver_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
     });
     }
    }
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
         Schema::dropIfExists('drivers_vehicles');
    }

}

