<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('submissions') ) {

            Schema::create('submissions', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->decimal('amount')->nullable()   ;                   $table->decimal('corrected_amount')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->unsignedInteger('driver_submission_id')->nullable()   ;                   $table->unsignedInteger('currency_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('submissions');
    }

}

