<?php

namespace App\Domains\Route\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Route\Models\Traits\Attribute\RouteAttribute;
use App\Domains\Route\Models\Traits\Method\RouteMethod;
use App\Domains\Route\Models\Traits\Relationship\RouteRelationship;
use App\Domains\Route\Models\Traits\Scope\RouteScope;


/**
 * Class Route.
 */
class Route extends Model
{
    use SoftDeletes,
        RouteAttribute,
        RouteMethod,
        RouteRelationship,
        RouteScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'routes';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "route",        "km/day",        "today",        "driver_id",    ];

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
    "today",
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