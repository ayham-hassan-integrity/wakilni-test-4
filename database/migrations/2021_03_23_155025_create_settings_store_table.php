<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsStoreTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('settings_store') ) {

            Schema::create('settings_store', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->unsignedInteger('store_id')->nullable()   ;                   $table->unsignedInteger('setting_id')->nullable()   ;                   $table->text('value')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('settings_store');
    }

}

