<?php

namespace App\Domains\Area\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Area\Models\Traits\Attribute\AreaAttribute;
use App\Domains\Area\Models\Traits\Method\AreaMethod;
use App\Domains\Area\Models\Traits\Relationship\AreaRelationship;
use App\Domains\Area\Models\Traits\Scope\AreaScope;


/**
 * Class Area.
 */
class Area extends Model
{
    use SoftDeletes,
        AreaAttribute,
        AreaMethod,
        AreaRelationship,
        AreaScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'areas';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "name",        "zone_id",    ];

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