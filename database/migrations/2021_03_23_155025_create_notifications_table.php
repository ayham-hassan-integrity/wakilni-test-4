<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('notifications') ) {

            Schema::create('notifications', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->Integer('type_id')   ;                   $table->unsignedInteger('notifiable_id')->nullable()   ;                   $table->text('notifiable_type')->nullable()   ;                   $table->text('data')   ;                   $table->timestamp('read_at')->nullable()   ;                   $table->unsignedInteger('objectable_id')->nullable()   ;                   $table->text('objectable_type')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('notifications');
    }

}

