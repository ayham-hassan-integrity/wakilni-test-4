<?php

namespace App\Domains\Location\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Location\Models\Traits\Attribute\LocationAttribute;
use App\Domains\Location\Models\Traits\Method\LocationMethod;
use App\Domains\Location\Models\Traits\Relationship\LocationRelationship;
use App\Domains\Location\Models\Traits\Scope\LocationScope;


/**
 * Class Location.
 */
class Location extends Model
{
    use SoftDeletes,
        LocationAttribute,
        LocationMethod,
        LocationRelationship,
        LocationScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'locations';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "building",        "floor",        "directions",        "longitude",        "latitude",        "area_id",        "personable_id",        "personable_type",        "type_id",        "is_active",        "image_id",        "app_token_id",        "app_ref_id",        "voice",    ];

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