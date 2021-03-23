<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('packages') ) {

            Schema::create('packages', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->Integer('quantity')   ;                   $table->Integer('trip_number')   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->unsignedInteger('order_details_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('packages');
    }

}

