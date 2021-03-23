<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelescopeMonitoringTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('telescope_monitoring') ) {

            Schema::create('telescope_monitoring', function (Blueprint $table) {                   $table->text('tag')   ;                   $table->softDeletes();
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
         Schema::dropIfExists('telescope_monitoring');
    }

}

