<?php

namespace App\Domains\OrderDetail\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\OrderDetail\Models\Traits\Attribute\OrderdetailAttribute;
use App\Domains\OrderDetail\Models\Traits\Method\OrderdetailMethod;
use App\Domains\OrderDetail\Models\Traits\Relationship\OrderdetailRelationship;
use App\Domains\OrderDetail\Models\Traits\Scope\OrderdetailScope;


/**
 * Class Orderdetail.
 */
class Orderdetail extends Model
{
    use SoftDeletes,
        OrderdetailAttribute,
        OrderdetailMethod,
        OrderdetailRelationship,
        OrderdetailScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'order_details';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "collection_amount",        "note",        "preferred_sender_date",        "preferred_sender_from_time",        "preferred_sender_to_time",        "preferred_receiver_date",        "preferred_receiver_from_time",        "preferred_receiver_to_time",        "require_signature",        "require_picture",        "same_package",        "senderable_id",        "senderable_type",        "receiverable_id",        "receiverable_type",        "payment_type_id",        "cash_collection_type_id",        "customer_id",        "piggy_bank_id",        "type_id",        "sender_location_id",        "receiver_location_id",        "collection_currency",        "store_id",        "app_token_id",        "app_ref_id",        "fulfillment_id",    ];

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
    "preferred_sender_date",
    "preferred_receiver_date",
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