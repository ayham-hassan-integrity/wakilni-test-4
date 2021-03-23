<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelescopeEntriesTagsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('telescope_entries_tags') ) {

            Schema::create('telescope_entries_tags', function (Blueprint $table) {                   $table->char('entry_uuid')   ;                   $table->text('tag')   ;                   $table->softDeletes();
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
         Schema::dropIfExists('telescope_entries_tags');
    }

}

