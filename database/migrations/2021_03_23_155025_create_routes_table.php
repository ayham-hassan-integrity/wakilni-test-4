<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('routes') ) {

            Schema::create('routes', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->longtext('route')   ;                   $table->Integer('km/day')->nullable()   ;                   $table->date('today')->nullable()   ;                   $table->unsignedInteger('driver_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('routes');
    }

}

