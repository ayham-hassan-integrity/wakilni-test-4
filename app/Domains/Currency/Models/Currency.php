<?php

namespace App\Domains\Currency\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Currency\Models\Traits\Attribute\CurrencyAttribute;
use App\Domains\Currency\Models\Traits\Method\CurrencyMethod;
use App\Domains\Currency\Models\Traits\Relationship\CurrencyRelationship;
use App\Domains\Currency\Models\Traits\Scope\CurrencyScope;


/**
 * Class Currency.
 */
class Currency extends Model
{
    use SoftDeletes,
        CurrencyAttribute,
        CurrencyMethod,
        CurrencyRelationship,
        CurrencyScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'currencies';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "title",        "symbol_left",        "symbol_right",        "code",        "exchange_rate",    ];

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