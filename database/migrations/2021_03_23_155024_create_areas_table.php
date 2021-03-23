<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('areas') ) {

            Schema::create('areas', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('name')   ;                   $table->unsignedInteger('zone_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('areas');
    }

}

