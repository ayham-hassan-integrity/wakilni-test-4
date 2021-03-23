<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarcodesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('barcodes') ) {

            Schema::create('barcodes', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->Integer('status')   ;                   $table->text('barcode_order_number')   ;                   $table->unsignedInteger('pickup_order_id')->nullable()   ;                   $table->unsignedInteger('pickup_task_id')->nullable()   ;                   $table->unsignedInteger('pickup_driver_id')->nullable()   ;                   $table->unsignedInteger('delivery_order_id')->nullable()   ;                   $table->unsignedInteger('customer_id')->nullable()   ;                   $table->datetime('scanned_at')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('barcodes');
    }

}

