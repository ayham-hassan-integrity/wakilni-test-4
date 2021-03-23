<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerPricesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('customer_prices') ) {

            Schema::create('customer_prices', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->Integer('minimum_count')->nullable()   ;                   $table->Integer('maximum_count')->nullable()   ;                   $table->decimal('price')->nullable()   ;                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->unsignedInteger('from_zone_id')->nullable()   ;                   $table->unsignedInteger('to_zone_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('customer_prices');
    }

}

