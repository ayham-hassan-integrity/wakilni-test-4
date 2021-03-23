<?php

namespace App\Domains\StoreCurrency\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\StoreCurrency\Models\Traits\Attribute\StorecurrencyAttribute;
use App\Domains\StoreCurrency\Models\Traits\Method\StorecurrencyMethod;
use App\Domains\StoreCurrency\Models\Traits\Relationship\StorecurrencyRelationship;
use App\Domains\StoreCurrency\Models\Traits\Scope\StorecurrencyScope;


/**
 * Class Storecurrency.
 */
class Storecurrency extends Model
{
    use SoftDeletes,
        StorecurrencyAttribute,
        StorecurrencyMethod,
        StorecurrencyRelationship,
        StorecurrencyScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'stores_currencies';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "store_id",        "currency_id",    ];

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