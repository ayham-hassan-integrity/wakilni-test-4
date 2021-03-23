<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelHasPermissionsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('model_has_permissions') ) {

            Schema::create('model_has_permissions', function (Blueprint $table) {                   $table->unsignedInteger('permission_id')   ;                   $table->unsignedInteger('model_id')   ;                   $table->text('model_type')   ;                   $table->softDeletes();
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
         Schema::dropIfExists('model_has_permissions');
    }

}

