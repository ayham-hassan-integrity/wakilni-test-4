<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('users') ) {

            Schema::create('users', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('email')->nullable()   ;                   $table->text('phone_number')->nullable()   ;                   $table->text('password')   ;                   $table->text('pattern')->nullable()   ;                   $table->datetime('start_date')   ;                   $table->unsignedInteger('office_id')->nullable()   ;                   $table->text('remember_token')->nullable()   ;                   $table->unsignedInteger('contact_id')->nullable()   ;                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->datetime('last_login')->nullable()   ;                   $table->Integer('is_active')   ;                   $table->unsignedInteger('language_type')->nullable()   ;                   $table->text('time_zone')   ;                   $table->text('provider_name')->nullable()   ;                   $table->text('provider_token')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('users');
    }

}

