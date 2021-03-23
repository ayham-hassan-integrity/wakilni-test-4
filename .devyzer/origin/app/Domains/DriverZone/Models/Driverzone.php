<?php

namespace App\Domains\DriverZone\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\DriverZone\Models\Traits\Attribute\DriverzoneAttribute;
use App\Domains\DriverZone\Models\Traits\Method\DriverzoneMethod;
use App\Domains\DriverZone\Models\Traits\Relationship\DriverzoneRelationship;
use App\Domains\DriverZone\Models\Traits\Scope\DriverzoneScope;


/**
 * Class Driverzone.
 */
class Driverzone extends Model
{
    use SoftDeletes,
        DriverzoneAttribute,
        DriverzoneMethod,
        DriverzoneRelationship,
        DriverzoneScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'drivers_zones';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "zone_id",        "driver_id",    ];

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