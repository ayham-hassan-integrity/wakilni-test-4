<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('reviews') ) {

            Schema::create('reviews', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->unsignedInteger('order_id')->nullable()   ;                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->unsignedInteger('recipient_id')->nullable()   ;                   $table->Integer('rate')   ;                   $table->text('feedback_message')->nullable()   ;                   $table->Integer('viewed')   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('reviews');
    }

}

