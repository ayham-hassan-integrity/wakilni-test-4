<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('collections') ) {

            Schema::create('collections', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->decimal('amount')   ;                   $table->unsignedInteger('task_id')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->unsignedInteger('currency_id')->nullable()   ;                   $table->unsignedInteger('order_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('collections');
    }

}

