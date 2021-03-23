<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeSheetsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('time_sheets') ) {

            Schema::create('time_sheets', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->datetime('from')   ;                   $table->datetime('to')->nullable()   ;                   $table->text('note')->nullable()   ;                   $table->unsignedInteger('user_id')->nullable()   ;                   $table->Integer('status')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('time_sheets');
    }

}

