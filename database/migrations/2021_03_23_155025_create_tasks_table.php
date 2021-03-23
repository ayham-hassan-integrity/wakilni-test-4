<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('tasks') ) {

            Schema::create('tasks', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->Integer('sequence')   ;                   $table->Integer('overall_sequence')->nullable()   ;                   $table->decimal('deliver_amount')->nullable()   ;                   $table->decimal('receive_amount')->nullable()   ;                   $table->text('deliver_package')->nullable()   ;                   $table->text('receive_package')->nullable()   ;                   $table->text('note')->nullable()   ;                   $table->text('fail_reason')->nullable()   ;                   $table->text('collection_note')->nullable()   ;                   $table->datetime('preferred_date')->nullable()   ;                   $table->time('preferred_from_time')->nullable()   ;                   $table->time('preferred_to_time')->nullable()   ;                   $table->datetime('collection_date')->nullable()   ;                   $table->Integer('require_signature')   ;                   $table->Integer('status')   ;                   $table->Integer('submitted')   ;                   $table->Integer('secured')->nullable()   ;                   $table->unsignedInteger('receiverable_id')->nullable()   ;                   $table->text('receiverable_type')->nullable()   ;                   $table->unsignedInteger('order_id')->nullable()   ;                   $table->unsignedInteger('location_id')->nullable()   ;                   $table->unsignedInteger('driver_id')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->unsignedInteger('store_id')->nullable()   ;                   $table->Integer('require_picture')   ;                   $table->Integer('picture_id')->nullable()   ;                   $table->Integer('signature_id')->nullable()   ;                   $table->unsignedInteger('driver_submission_id')->nullable()   ;                   $table->unsignedInteger('piggy_bank_id')->nullable()   ;                   $table->unsignedInteger('vehicle_id')->nullable()   ;                   $table->decimal('receive_price')->nullable()   ;                   $table->double('deliver_amount_currency_rate')->nullable()   ;                   $table->double('receive_amount_currency_rate')->nullable()   ;                   $table->unsignedInteger('amount_currency')->nullable()   ;                   $table->unsignedInteger('price_currency')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('tasks');
    }

}

