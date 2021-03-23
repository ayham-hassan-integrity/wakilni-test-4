<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresCurrenciesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('stores_currencies') ) {

            Schema::create('stores_currencies', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->unsignedInteger('store_id')->nullable()   ;                   $table->unsignedInteger('currency_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('stores_currencies');
    }

}

