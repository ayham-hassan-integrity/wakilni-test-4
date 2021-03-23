<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationLogsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('location_logs') ) {

            Schema::create('location_logs', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->longtext('data')->nullable()   ;                   $table->unsignedInteger('location_id')->nullable()   ;                   $table->unsignedInteger('driver_id')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('location_logs');
    }

}

