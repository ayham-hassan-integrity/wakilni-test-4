<?php

namespace App\Domains\TelescopeMonitoring\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\TelescopeMonitoring\Models\Traits\Attribute\TelescopemonitoringAttribute;
use App\Domains\TelescopeMonitoring\Models\Traits\Method\TelescopemonitoringMethod;
use App\Domains\TelescopeMonitoring\Models\Traits\Relationship\TelescopemonitoringRelationship;
use App\Domains\TelescopeMonitoring\Models\Traits\Scope\TelescopemonitoringScope;


/**
 * Class Telescopemonitoring.
 */
class Telescopemonitoring extends Model
{
    use SoftDeletes,
        TelescopemonitoringAttribute,
        TelescopemonitoringMethod,
        TelescopemonitoringRelationship,
        TelescopemonitoringScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'telescope_monitoring';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "tag",    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];



    /**
     * @var array
     */
    protected $dates = [
    "deleted_at",
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