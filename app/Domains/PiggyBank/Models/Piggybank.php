<?php

namespace App\Domains\PiggyBank\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\PiggyBank\Models\Traits\Attribute\PiggybankAttribute;
use App\Domains\PiggyBank\Models\Traits\Method\PiggybankMethod;
use App\Domains\PiggyBank\Models\Traits\Relationship\PiggybankRelationship;
use App\Domains\PiggyBank\Models\Traits\Scope\PiggybankScope;


/**
 * Class Piggybank.
 */
class Piggybank extends Model
{
    use SoftDeletes,
        PiggybankAttribute,
        PiggybankMethod,
        PiggybankRelationship,
        PiggybankScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'piggy_banks';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "note",        "start_date",        "end_date",        "status",        "customer_id",    ];

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
    "start_date",
    "end_date",
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