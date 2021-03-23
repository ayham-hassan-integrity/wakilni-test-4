<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('orders') ) {

            Schema::create('orders', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('order_number')   ;                   $table->Integer('rate')->nullable()   ;                   $table->datetime('completed_on')->nullable()   ;                   $table->Integer('payment_status')   ;                   $table->Integer('package_status')   ;                   $table->Integer('status')   ;                   $table->datetime('status_updated_at')->nullable()   ;                   $table->decimal('remaining_balance')->nullable()   ;                   $table->decimal('price')->nullable()   ;                   $table->unsignedInteger('parent_id')->nullable()   ;                   $table->unsignedInteger('order_details_id')->nullable()   ;                   $table->unsignedInteger('comment_id')->nullable()   ;                   $table->text('waybill')->nullable()   ;                   $table->Integer('allow_receiver_contact')   ;                   $table->Integer('send_receiver_msg')   ;                   $table->Integer('car_needed')   ;                   $table->Integer('settled_with_wakilni')   ;                   $table->Integer('settled_with_customer')   ;                   $table->unsignedInteger('piggy_bank_submission_id')->nullable()   ;                   $table->Integer('active')   ;                   $table->Integer('is_critical')   ;                   $table->datetime('become_critical_date')->nullable()   ;                   $table->datetime('confirmed_at')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('orders');
    }

}

