<?php

namespace App\Domains\Payment\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Payment\Models\Traits\Attribute\PaymentAttribute;
use App\Domains\Payment\Models\Traits\Method\PaymentMethod;
use App\Domains\Payment\Models\Traits\Relationship\PaymentRelationship;
use App\Domains\Payment\Models\Traits\Scope\PaymentScope;


/**
 * Class Payment.
 */
class Payment extends Model
{
    use SoftDeletes,
        PaymentAttribute,
        PaymentMethod,
        PaymentRelationship,
        PaymentScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'payments';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "order_id",        "customer_id",        "piggy_bank_id",        "type_id",        "amount",        "currency_id",    ];

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