<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('vehicles') ) {

            Schema::create('vehicles', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->Integer('count')   ;                   $table->Integer('remaining')->nullable()   ;                   $table->Integer('maintenance')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('vehicles');
    }

}

