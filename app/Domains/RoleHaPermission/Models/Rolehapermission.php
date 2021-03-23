<?php

namespace App\Domains\RoleHaPermission\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\RoleHaPermission\Models\Traits\Attribute\RolehapermissionAttribute;
use App\Domains\RoleHaPermission\Models\Traits\Method\RolehapermissionMethod;
use App\Domains\RoleHaPermission\Models\Traits\Relationship\RolehapermissionRelationship;
use App\Domains\RoleHaPermission\Models\Traits\Scope\RolehapermissionScope;


/**
 * Class Rolehapermission.
 */
class Rolehapermission extends Model
{
    use SoftDeletes,
        RolehapermissionAttribute,
        RolehapermissionMethod,
        RolehapermissionRelationship,
        RolehapermissionScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'role_has_permissions';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "permission_id",        "role_id",    ];

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