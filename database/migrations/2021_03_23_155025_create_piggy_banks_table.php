<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiggyBanksTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('piggy_banks') ) {

            Schema::create('piggy_banks', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('note')->nullable()   ;                   $table->datetime('start_date')->nullable()   ;                   $table->datetime('end_date')->nullable()   ;                   $table->Integer('status')   ;                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('piggy_banks');
    }

}

