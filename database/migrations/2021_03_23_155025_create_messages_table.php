<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('messages') ) {

            Schema::create('messages', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('title')->nullable()   ;                   $table->text('message')->nullable()   ;                   $table->Integer('status')   ;                   $table->unsignedInteger('receiver_id')->nullable()   ;                   $table->unsignedInteger('sender_id')->nullable()   ;                   $table->unsignedInteger('content_type_id')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->unsignedInteger('location_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('messages');
    }

}

