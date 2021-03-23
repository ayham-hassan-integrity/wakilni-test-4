<?php

namespace App\Domains\Order\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Order\Models\Traits\Attribute\OrderAttribute;
use App\Domains\Order\Models\Traits\Method\OrderMethod;
use App\Domains\Order\Models\Traits\Relationship\OrderRelationship;
use App\Domains\Order\Models\Traits\Scope\OrderScope;


/**
 * Class Order.
 */
class Order extends Model
{
    use SoftDeletes,
        OrderAttribute,
        OrderMethod,
        OrderRelationship,
        OrderScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'orders';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "order_number",        "rate",        "completed_on",        "payment_status",        "package_status",        "status",        "status_updated_at",        "remaining_balance",        "price",        "parent_id",        "order_details_id",        "comment_id",        "waybill",        "allow_receiver_contact",        "send_receiver_msg",        "car_needed",        "settled_with_wakilni",        "settled_with_customer",        "piggy_bank_submission_id",        "active",        "is_critical",        "become_critical_date",        "confirmed_at",    ];

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
    "completed_on",
    "status_updated_at",
    "become_critical_date",
    "confirmed_at",
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