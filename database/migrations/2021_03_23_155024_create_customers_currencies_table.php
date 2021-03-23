<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersCurrenciesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('customers_currencies') ) {

            Schema::create('customers_currencies', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->unsignedInteger('currency_id')->nullable()   ;                   $table->double(8,2)('exchange_rate')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('customers_currencies');
    }

}

