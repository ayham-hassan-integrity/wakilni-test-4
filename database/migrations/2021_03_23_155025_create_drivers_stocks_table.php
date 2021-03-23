<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversStocksTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('drivers_stocks') ) {

            Schema::create('drivers_stocks', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->decimal('amount')->nullable()   ;                   $table->unsignedInteger('stock_id')->nullable()   ;                   $table->unsignedInteger('driver_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('drivers_stocks');
    }

}

