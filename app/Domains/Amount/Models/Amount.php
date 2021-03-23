<?php

namespace App\Domains\Amount\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Amount\Models\Traits\Attribute\AmountAttribute;
use App\Domains\Amount\Models\Traits\Method\AmountMethod;
use App\Domains\Amount\Models\Traits\Relationship\AmountRelationship;
use App\Domains\Amount\Models\Traits\Scope\AmountScope;


/**
 * Class Amount.
 */
class Amount extends Model
{
    use SoftDeletes,
        AmountAttribute,
        AmountMethod,
        AmountRelationship,
        AmountScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'amounts';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "amount",        "piggy_bank_id",        "type_id",        "currency_id",    ];

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