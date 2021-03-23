<?php

namespace App\Domains\CustomerCurrency\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\CustomerCurrency\Models\Traits\Attribute\CustomercurrencyAttribute;
use App\Domains\CustomerCurrency\Models\Traits\Method\CustomercurrencyMethod;
use App\Domains\CustomerCurrency\Models\Traits\Relationship\CustomercurrencyRelationship;
use App\Domains\CustomerCurrency\Models\Traits\Scope\CustomercurrencyScope;


/**
 * Class Customercurrency.
 */
class Customercurrency extends Model
{
    use SoftDeletes,
        CustomercurrencyAttribute,
        CustomercurrencyMethod,
        CustomercurrencyRelationship,
        CustomercurrencyScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'customers_currencies';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "customer_id",        "currency_id",        "exchange_rate",    ];

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