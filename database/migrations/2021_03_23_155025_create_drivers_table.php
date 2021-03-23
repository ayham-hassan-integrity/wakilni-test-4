<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('drivers') ) {

            Schema::create('drivers', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('nationality')->nullable()   ;                   $table->text('color')->nullable()   ;                   $table->Integer('has_gps')   ;                   $table->Integer('has_internet')   ;                   $table->Integer('status')   ;                   $table->unsignedInteger('user_id')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->unsignedInteger('now_driving')->nullable()   ;                   $table->Integer('is_active')   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('drivers');
    }

}

