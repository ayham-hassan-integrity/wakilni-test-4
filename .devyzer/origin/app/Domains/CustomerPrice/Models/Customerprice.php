<?php

namespace App\Domains\CustomerPrice\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\CustomerPrice\Models\Traits\Attribute\CustomerpriceAttribute;
use App\Domains\CustomerPrice\Models\Traits\Method\CustomerpriceMethod;
use App\Domains\CustomerPrice\Models\Traits\Relationship\CustomerpriceRelationship;
use App\Domains\CustomerPrice\Models\Traits\Scope\CustomerpriceScope;


/**
 * Class Customerprice.
 */
class Customerprice extends Model
{
    use SoftDeletes,
        CustomerpriceAttribute,
        CustomerpriceMethod,
        CustomerpriceRelationship,
        CustomerpriceScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'customer_prices';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "minimum_count",        "maximum_count",        "price",        "customer_id",        "from_zone_id",        "to_zone_id",    ];

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