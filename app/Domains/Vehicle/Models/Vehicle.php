<?php

namespace App\Domains\Vehicle\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Vehicle\Models\Traits\Attribute\VehicleAttribute;
use App\Domains\Vehicle\Models\Traits\Method\VehicleMethod;
use App\Domains\Vehicle\Models\Traits\Relationship\VehicleRelationship;
use App\Domains\Vehicle\Models\Traits\Scope\VehicleScope;


/**
 * Class Vehicle.
 */
class Vehicle extends Model
{
    use SoftDeletes,
        VehicleAttribute,
        VehicleMethod,
        VehicleRelationship,
        VehicleScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'vehicles';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "count",        "remaining",        "maintenance",        "type_id",    ];

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