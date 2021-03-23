<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('payments') ) {

            Schema::create('payments', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->unsignedInteger('order_id')->nullable()   ;                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->unsignedInteger('piggy_bank_id')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->decimal('amount')->nullable()   ;                   $table->unsignedInteger('currency_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('payments');
    }

}

