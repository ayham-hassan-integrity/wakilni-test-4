<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('zones') ) {

            Schema::create('zones', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('label')->nullable()   ;                   $table->longtext('area')   ;                   $table->unsignedInteger('store_id')->nullable()   ;                   $table->text('description')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('zones');
    }

}

