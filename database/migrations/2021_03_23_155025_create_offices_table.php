<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('offices') ) {

            Schema::create('offices', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('name')   ;                   $table->longtext('area')   ;                   $table->unsignedInteger('store_id')->nullable()   ;                   $table->text('phone_number')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('offices');
    }

}

