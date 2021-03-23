<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('comments') ) {

            Schema::create('comments', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('comment')->nullable()   ;                   $table->Integer('is_public')   ;                   $table->unsignedInteger('order_id')->nullable()   ;                   $table->unsignedInteger('user_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('comments');
    }

}

