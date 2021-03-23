<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */

    public function up()
    {
        if ( !Schema::hasTable('customers') ) {

            Schema::create('customers', function (Blueprint $table) {                   $table->unsignedInteger('id');                   $table->text('golden_rule')->nullable()   ;                   $table->Integer('mof')->nullable()   ;                   $table->text('vat')->nullable()   ;                   $table->text('accounting_ref')->nullable()   ;                   $table->decimal('discount')->nullable()   ;                   $table->text('quality_check')->nullable()   ;                   $table->text('note')->nullable()   ;                   $table->text('inhouse_note')->nullable()   ;                   $table->datetime('submit_account_date')->nullable()   ;                   $table->unsignedInteger('type_id')->nullable()   ;                   $table->unsignedInteger('payment_method')->nullable()   ;                   $table->unsignedInteger('subscription_type')->nullable()   ;                   $table->Integer('is_active')   ;                   $table->text('deactivate_reason')->nullable()   ;                   $table->text('shop_name')->nullable()   ;                   $table->text('name')->nullable()   ;                   $table->unsignedInteger('default_address_id')->nullable()   ;                   $table->text('waybill')->nullable()   ;                   $table->text('phone_number')->nullable()   ;                   $table->Integer('email_notifications')   ;                   $table->Integer('sms_notifications')   ;                   $table->unsignedInteger('account_manager_id')->nullable()   ;                   $table->unsignedInteger('industry_id')->nullable()   ;                   $table->blob('logo')->nullable()   ;                   $table->text('online_platform')->nullable()   ;                   $table->year('established_year')->nullable()   ;                   $table->Integer('is_product_delicate')->nullable()   ;                   $table->Integer('require_bigger_car')->nullable()   ;                   $table->Integer('pickup_preference')->nullable()   ;                   $table->Integer('orders_per_month')->nullable()   ;                   $table->Integer('order_average_value')->nullable()   ;                   $table->Integer('return_products')->nullable()   ;                   $table->text('beneficiary_name')->nullable()   ;                   $table->Integer('official_invoice_needed')->nullable()   ;                   $table->timestamps();                $table->softDeletes();
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
         Schema::dropIfExists('customers');
    }

}

