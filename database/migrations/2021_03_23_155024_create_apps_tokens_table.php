<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppsTokensTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('apps_tokens') ) {

            Schema::create('apps_tokens', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('shop')   ;                   $table->text('access_token')->nullable()   ;                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->unsignedInteger('app_id')->nullable()   ;                   $table->Integer('location_id')->nullable()   ;                   $table->text('code')->nullable()   ;                   $table->Integer('authenticated')   ;                   $table->text('remember_token')->nullable()   ;                   $table->text('country_code')->nullable()   ;                   $table->text('extra')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('apps_tokens');
    }

}

