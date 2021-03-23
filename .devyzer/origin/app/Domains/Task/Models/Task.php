<?php

namespace App\Domains\Task\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Task\Models\Traits\Attribute\TaskAttribute;
use App\Domains\Task\Models\Traits\Method\TaskMethod;
use App\Domains\Task\Models\Traits\Relationship\TaskRelationship;
use App\Domains\Task\Models\Traits\Scope\TaskScope;


/**
 * Class Task.
 */
class Task extends Model
{
    use SoftDeletes,
        TaskAttribute,
        TaskMethod,
        TaskRelationship,
        TaskScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'tasks';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "sequence",        "overall_sequence",        "deliver_amount",        "receive_amount",        "deliver_package",        "receive_package",        "note",        "fail_reason",        "collection_note",        "preferred_date",        "preferred_from_time",        "preferred_to_time",        "collection_date",        "require_signature",        "status",        "submitted",        "secured",        "receiverable_id",        "receiverable_type",        "order_id",        "location_id",        "driver_id",        "type_id",        "customer_id",        "store_id",        "require_picture",        "picture_id",        "signature_id",        "driver_submission_id",        "piggy_bank_id",        "vehicle_id",        "receive_price",        "deliver_amount_currency_rate",        "receive_amount_currency_rate",        "amount_currency",        "price_currency",    ];

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
    "preferred_date",
    "collection_date",
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