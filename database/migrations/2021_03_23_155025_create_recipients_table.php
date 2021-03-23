<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipientsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('recipients') ) {

            Schema::create('recipients', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('first_name')   ;                   $table->text('last_name')->nullable()   ;                   $table->text('phone_number')->nullable()   ;                   $table->date('date_of_birth')->nullable()   ;                   $table->Integer('gender')   ;                   $table->text('email')->nullable()   ;                   $table->text('note')->nullable()   ;                   $table->Integer('allow_driver_contact')   ;                   $table->unsignedInteger('viewer_id')->nullable()   ;                   $table->unsignedInteger('contact_id')->nullable()   ;                   $table->unsignedInteger('default_address_id')->nullable()   ;                   $table->text('secondary_phone_number')->nullable()   ;                   $table->unsignedInteger('app_token_id')->nullable()   ;                   $table->unsignedInteger('app_ref_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('recipients');
    }

}

