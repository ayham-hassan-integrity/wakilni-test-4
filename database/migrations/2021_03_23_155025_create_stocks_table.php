<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('stocks') ) {

            Schema::create('stocks', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('label')->nullable()   ;                   $table->decimal('amount')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->unsignedInteger('size_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('stocks');
    }

}

