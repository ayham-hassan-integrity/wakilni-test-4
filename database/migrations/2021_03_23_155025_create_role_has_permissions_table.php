<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleHasPermissionsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('role_has_permissions') ) {

            Schema::create('role_has_permissions', function (Blueprint $table) {                   $table->unsignedInteger('permission_id')   ;                   $table->unsignedInteger('role_id')   ;                   $table->softDeletes();
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
         Schema::dropIfExists('role_has_permissions');
    }

}

