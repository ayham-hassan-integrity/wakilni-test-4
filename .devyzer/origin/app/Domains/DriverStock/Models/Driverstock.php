<?php

namespace App\Domains\DriverStock\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\DriverStock\Models\Traits\Attribute\DriverstockAttribute;
use App\Domains\DriverStock\Models\Traits\Method\DriverstockMethod;
use App\Domains\DriverStock\Models\Traits\Relationship\DriverstockRelationship;
use App\Domains\DriverStock\Models\Traits\Scope\DriverstockScope;


/**
 * Class Driverstock.
 */
class Driverstock extends Model
{
    use SoftDeletes,
        DriverstockAttribute,
        DriverstockMethod,
        DriverstockRelationship,
        DriverstockScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'drivers_stocks';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "amount",        "stock_id",        "driver_id",    ];

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