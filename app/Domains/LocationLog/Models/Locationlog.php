<?php

namespace App\Domains\LocationLog\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\LocationLog\Models\Traits\Attribute\LocationlogAttribute;
use App\Domains\LocationLog\Models\Traits\Method\LocationlogMethod;
use App\Domains\LocationLog\Models\Traits\Relationship\LocationlogRelationship;
use App\Domains\LocationLog\Models\Traits\Scope\LocationlogScope;


/**
 * Class Locationlog.
 */
class Locationlog extends Model
{
    use SoftDeletes,
        LocationlogAttribute,
        LocationlogMethod,
        LocationlogRelationship,
        LocationlogScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'location_logs';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "data",        "location_id",        "driver_id",        "type_id",    ];

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