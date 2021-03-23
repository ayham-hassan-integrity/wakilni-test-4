<?php

namespace App\Domains\ModelHaPermission\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\ModelHaPermission\Models\Traits\Attribute\ModelhapermissionAttribute;
use App\Domains\ModelHaPermission\Models\Traits\Method\ModelhapermissionMethod;
use App\Domains\ModelHaPermission\Models\Traits\Relationship\ModelhapermissionRelationship;
use App\Domains\ModelHaPermission\Models\Traits\Scope\ModelhapermissionScope;


/**
 * Class Modelhapermission.
 */
class Modelhapermission extends Model
{
    use SoftDeletes,
        ModelhapermissionAttribute,
        ModelhapermissionMethod,
        ModelhapermissionRelationship,
        ModelhapermissionScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'model_has_permissions';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "permission_id",        "model_id",        "model_type",    ];

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