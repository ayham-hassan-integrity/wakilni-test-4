<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFailedJobsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('failed_jobs') ) {

            Schema::create('failed_jobs', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('connection')   ;                   $table->text('queue')   ;                   $table->longtext('payload')   ;                   $table->longtext('exception')   ;                   $table->timestamp('failed_at')   ;                   $table->softDeletes();
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
         Schema::dropIfExists('failed_jobs');
    }

}

