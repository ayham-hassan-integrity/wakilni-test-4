<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('order_details') ) {

            Schema::create('order_details', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->decimal('collection_amount')->nullable()   ;                   $table->text('note')->nullable()   ;                   $table->datetime('preferred_sender_date')->nullable()   ;                   $table->time('preferred_sender_from_time')->nullable()   ;                   $table->time('preferred_sender_to_time')->nullable()   ;                   $table->datetime('preferred_receiver_date')->nullable()   ;                   $table->time('preferred_receiver_from_time')->nullable()   ;                   $table->time('preferred_receiver_to_time')->nullable()   ;                   $table->Integer('require_signature')   ;                   $table->Integer('require_picture')   ;                   $table->Integer('same_package')   ;                   $table->unsignedInteger('senderable_id')->nullable()   ;                   $table->text('senderable_type')->nullable()   ;                   $table->unsignedInteger('receiverable_id')->nullable()   ;                   $table->text('receiverable_type')->nullable()   ;                   $table->unsignedInteger('payment_type_id')->nullable()   ;                   $table->unsignedInteger('cash_collection_type_id')->nullable()   ;                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->unsignedInteger('piggy_bank_id')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->unsignedInteger('sender_location_id')->nullable()   ;                   $table->unsignedInteger('receiver_location_id')->nullable()   ;                   $table->unsignedInteger('collection_currency')->nullable()   ;                   $table->unsignedInteger('store_id')->nullable()   ;                   $table->unsignedInteger('app_token_id')->nullable()   ;                   $table->Integer('app_ref_id')->nullable()   ;                   $table->Integer('fulfillment_id')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('order_details');
    }

}

