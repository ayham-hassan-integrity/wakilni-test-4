<?php

namespace App\Domains\Customer\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Customer\Models\Traits\Attribute\CustomerAttribute;
use App\Domains\Customer\Models\Traits\Method\CustomerMethod;
use App\Domains\Customer\Models\Traits\Relationship\CustomerRelationship;
use App\Domains\Customer\Models\Traits\Scope\CustomerScope;


/**
 * Class Customer.
 */
class Customer extends Model
{
    use SoftDeletes,
        CustomerAttribute,
        CustomerMethod,
        CustomerRelationship,
        CustomerScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'customers';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "golden_rule",        "mof",        "vat",        "accounting_ref",        "discount",        "quality_check",        "note",        "inhouse_note",        "submit_account_date",        "type_id",        "payment_method",        "subscription_type",        "is_active",        "deactivate_reason",        "shop_name",        "name",        "default_address_id",        "waybill",        "phone_number",        "email_notifications",        "sms_notifications",        "account_manager_id",        "industry_id",        "logo",        "online_platform",        "established_year",        "is_product_delicate",        "require_bigger_car",        "pickup_preference",        "orders_per_month",        "order_average_value",        "return_products",        "beneficiary_name",        "official_invoice_needed",    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


    public $timestamps =["create_at","update_at"];

    /**
     * @var array
     */
    protected $dates = [
    "deleted_at",
    "create_at",
    "update_at",
    "submit_account_date",
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    /**
     * @var array
     */
    protected $appends = [

    ];

}