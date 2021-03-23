<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('currencies') ) {

            Schema::create('currencies', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('title')   ;                   $table->text('symbol_left')->nullable()   ;                   $table->text('symbol_right')->nullable()   ;                   $table->text('code')   ;                   $table->double(8,2)('exchange_rate')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('currencies');
    }

}

