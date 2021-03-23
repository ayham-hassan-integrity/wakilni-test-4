<?php

namespace App\Domains\Zone\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Zone\Models\Traits\Attribute\ZoneAttribute;
use App\Domains\Zone\Models\Traits\Method\ZoneMethod;
use App\Domains\Zone\Models\Traits\Relationship\ZoneRelationship;
use App\Domains\Zone\Models\Traits\Scope\ZoneScope;


/**
 * Class Zone.
 */
class Zone extends Model
{
    use SoftDeletes,
        ZoneAttribute,
        ZoneMethod,
        ZoneRelationship,
        ZoneScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'zones';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "label",        "area",        "store_id",        "description",    ];

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