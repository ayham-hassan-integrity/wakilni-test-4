<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('locations') ) {

            Schema::create('locations', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('building')->nullable()   ;                   $table->text('floor')->nullable()   ;                   $table->longtext('directions')->nullable()   ;                   $table->decimal('longitude')->nullable()   ;                   $table->decimal('latitude')->nullable()   ;                   $table->unsignedInteger('area_id')->nullable()   ;                   $table->unsignedInteger('personable_id')->nullable()   ;                   $table->text('personable_type')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->Integer('is_active')   ;                   $table->Integer('image_id')->nullable()   ;                   $table->unsignedInteger('app_token_id')->nullable()   ;                   $table->Integer('app_ref_id')->nullable()   ;                   $table->blob('voice')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('locations');
    }

}

