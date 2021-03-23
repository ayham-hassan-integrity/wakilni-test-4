<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelescopeEntriesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('telescope_entries') ) {

            Schema::create('telescope_entries', function (Blueprint $table) {                   $table->unsignedInteger('sequence')   ;                   $table->char('uuid')   ;                   $table->char('batch_id')   ;                   $table->text('family_hash')->nullable()   ;                   $table->Integer('should_display_on_index')   ;                   $table->text('type')   ;                   $table->longtext('content')   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('telescope_entries');
    }

}

