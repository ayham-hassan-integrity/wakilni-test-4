<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('contacts') ) {

            Schema::create('contacts', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('first_name')   ;                   $table->text('last_name')->nullable()   ;                   $table->text('phone_number')   ;                   $table->date('date_of_birth')->nullable()   ;                   $table->Integer('gender')   ;                   $table->Integer('is_active')   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('contacts');
    }

}

