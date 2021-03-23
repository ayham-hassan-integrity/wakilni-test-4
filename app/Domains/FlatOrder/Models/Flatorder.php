<?php

namespace App\Domains\FlatOrder\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\FlatOrder\Models\Traits\Attribute\FlatorderAttribute;
use App\Domains\FlatOrder\Models\Traits\Method\FlatorderMethod;
use App\Domains\FlatOrder\Models\Traits\Relationship\FlatorderRelationship;
use App\Domains\FlatOrder\Models\Traits\Scope\FlatorderScope;


/**
 * Class Flatorder.
 */
class Flatorder extends Model
{
    use SoftDeletes,
        FlatorderAttribute,
        FlatorderMethod,
        FlatorderRelationship,
        FlatorderScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'flat_orders';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "order_number",        "waybill",        "parent_id",        "order_id",        "order_details_id",        "type_id",        "rate",        "status",        "payment_status",        "package_status",        "remaining_balance",        "price",        "payment_type_id",        "price_currency_id",        "price_currency_exchange_rate",        "collection_amount",        "collection_type_id",        "collection_currency_id",        "collection_currency_exchange_rate",        "comment_id",        "important_comment_text",        "comments_count",        "allow_receiver_contact",        "send_receiver_msg",        "car_needed",        "settled_with_wakilni",        "settled_with_customer",        "active",        "is_critical",        "require_signature",        "require_picture",        "same_package",        "piggy_bank_submission_id",        "completed_on",        "status_updated_at",        "become_critical_date",        "confirmed_at",        "note",        "preferred_sender_date",        "preferred_sender_from_time",        "preferred_sender_to_time",        "preferred_receiver_date",        "preferred_receiver_from_time",        "preferred_receiver_to_time",        "senderable_id",        "senderable_type",        "senderable_name",        "senderable_phone_number",        "senderable_secondary_phone_number",        "receiverable_id",        "receiverable_type",        "receiverable_name",        "receiverable_phone_number",        "receiverable_secondary_phone_number",        "sender_location_id",        "sender_location_label",        "sender_area_id",        "sender_area_label",        "sender_zone_id",        "sender_zone_label",        "receiver_location_id",        "receiver_location_label",        "receiver_area_id",        "receiver_area_label",        "receiver_zone_id",        "receiver_zone_label",        "task_scheduled_date",        "task_scheduled_from_time",        "task_scheduled_to_time",        "task_driver_id",        "task_driver_user_id",        "task_driver_contact_id",        "task_driver_user_name",        "task_driver_user_phone_number",        "task_driver_user_is_active",        "last_task_driver_id",        "last_task_driver_user_id",        "last_task_driver_contact_id",        "last_task_driver_user_name",        "last_task_driver_user_phone_number",        "last_task_driver_user_is_active",        "packages",        "customer_id",        "customer_name",        "customer_golden_rule",        "customer_is_active",        "customer_account_manager_id",        "customer_industry_id",        "customer_user_id",        "customer_user_name",        "piggy_bank_id",        "store_id",        "app_token_id",        "app_ref_id",        "fulfillment_id",    ];

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
    "preferred_sender_date",
    "preferred_receiver_date",
    "task_scheduled_date",
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