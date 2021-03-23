<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevicesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('devices') ) {

            Schema::create('devices', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->unsignedInteger('user_id')->nullable()   ;                   $table->Integer('type')->nullable()   ;                   $table->text('token')   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('devices');
    }

}

