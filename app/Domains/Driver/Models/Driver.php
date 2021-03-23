<?php

namespace App\Domains\Driver\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Driver\Models\Traits\Attribute\DriverAttribute;
use App\Domains\Driver\Models\Traits\Method\DriverMethod;
use App\Domains\Driver\Models\Traits\Relationship\DriverRelationship;
use App\Domains\Driver\Models\Traits\Scope\DriverScope;


/**
 * Class Driver.
 */
class Driver extends Model
{
    use SoftDeletes,
        DriverAttribute,
        DriverMethod,
        DriverRelationship,
        DriverScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'drivers';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "nationality",        "color",        "has_gps",        "has_internet",        "status",        "user_id",        "type_id",        "now_driving",        "is_active",    ];

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