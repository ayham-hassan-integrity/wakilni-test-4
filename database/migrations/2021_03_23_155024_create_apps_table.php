<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('apps') ) {

            Schema::create('apps', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('name')   ;                   $table->Integer('public')   ;                   $table->text('client_id')->nullable()   ;                   $table->text('client_secret')->nullable()   ;                   $table->Integer('random_authentication')   ;                   $table->Integer('in_house_development')   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('apps');
    }

}

