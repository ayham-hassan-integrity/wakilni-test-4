<?php

namespace App\Domains\CustomerOperator\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\CustomerOperator\Models\Traits\Attribute\CustomeroperatorAttribute;
use App\Domains\CustomerOperator\Models\Traits\Method\CustomeroperatorMethod;
use App\Domains\CustomerOperator\Models\Traits\Relationship\CustomeroperatorRelationship;
use App\Domains\CustomerOperator\Models\Traits\Scope\CustomeroperatorScope;


/**
 * Class Customeroperator.
 */
class Customeroperator extends Model
{
    use SoftDeletes,
        CustomeroperatorAttribute,
        CustomeroperatorMethod,
        CustomeroperatorRelationship,
        CustomeroperatorScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'customers_operators';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "customer_id",        "operator_id",    ];

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