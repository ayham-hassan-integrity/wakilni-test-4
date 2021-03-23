<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLogTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('activity_log') ) {

            Schema::create('activity_log', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('log_name')->nullable()   ;                   $table->text('description')   ;                   $table->Integer('subject_id')->nullable()   ;                   $table->text('subject_type')->nullable()   ;                   $table->Integer('causer_id')->nullable()   ;                   $table->text('causer_type')->nullable()   ;                   $table->text('properties')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('activity_log');
    }

}

