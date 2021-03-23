<?php

namespace App\Domains\TimeZone\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\TimeZone\Models\Traits\Attribute\TimezoneAttribute;
use App\Domains\TimeZone\Models\Traits\Method\TimezoneMethod;
use App\Domains\TimeZone\Models\Traits\Relationship\TimezoneRelationship;
use App\Domains\TimeZone\Models\Traits\Scope\TimezoneScope;


/**
 * Class Timezone.
 */
class Timezone extends Model
{
    use SoftDeletes,
        TimezoneAttribute,
        TimezoneMethod,
        TimezoneRelationship,
        TimezoneScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'time_zones';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "zone",    ];

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