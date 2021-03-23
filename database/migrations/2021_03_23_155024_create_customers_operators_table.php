<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersOperatorsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('customers_operators') ) {

            Schema::create('customers_operators', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->unsignedInteger('operator_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('customers_operators');
    }

}

