<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('files') ) {

            Schema::create('files', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('mime')   ;                   $table->text('filename')   ;                   $table->unsignedInteger('size')   ;                   $table->text('storage_path')   ;                   $table->text('disk')   ;                   $table->Integer('status')   ;                   $table->unsignedInteger('fileable_id')->nullable()   ;                   $table->text('fileable_type')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('files');
    }

}

