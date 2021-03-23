<?php

namespace App\Domains\Permission\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Permission\Models\Traits\Attribute\PermissionAttribute;
use App\Domains\Permission\Models\Traits\Method\PermissionMethod;
use App\Domains\Permission\Models\Traits\Relationship\PermissionRelationship;
use App\Domains\Permission\Models\Traits\Scope\PermissionScope;


/**
 * Class Permission.
 */
class Permission extends Model
{
    use SoftDeletes,
        PermissionAttribute,
        PermissionMethod,
        PermissionRelationship,
        PermissionScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'permissions';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "name",        "guard_name",    ];

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