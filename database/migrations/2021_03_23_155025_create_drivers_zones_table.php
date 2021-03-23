<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversZonesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('drivers_zones') ) {

            Schema::create('drivers_zones', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->unsignedInteger('zone_id')->nullable()   ;                   $table->unsignedInteger('driver_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('drivers_zones');
    }

}

