<?php

namespace App\Domains\ActivityLog\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\ActivityLog\Models\Traits\Attribute\ActivitylogAttribute;
use App\Domains\ActivityLog\Models\Traits\Method\ActivitylogMethod;
use App\Domains\ActivityLog\Models\Traits\Relationship\ActivitylogRelationship;
use App\Domains\ActivityLog\Models\Traits\Scope\ActivitylogScope;


/**
 * Class Activitylog.
 */
class Activitylog extends Model
{
    use SoftDeletes,
        ActivitylogAttribute,
        ActivitylogMethod,
        ActivitylogRelationship,
        ActivitylogScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'activity_log';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "log_name",        "description",        "subject_id",        "subject_type",        "causer_id",        "causer_type",        "properties",    ];

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