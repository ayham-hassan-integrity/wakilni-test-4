<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverSubmissionsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('driver_submissions') ) {

            Schema::create('driver_submissions', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->decimal('goal_amount')->nullable()   ;                   $table->text('note')->nullable()   ;                   $table->Integer('status')   ;                   $table->unsignedInteger('driver_id')->nullable()   ;                   $table->text('operator_note')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('driver_submissions');
    }

}

