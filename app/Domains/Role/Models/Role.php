<?php

namespace App\Domains\Role\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Role\Models\Traits\Attribute\RoleAttribute;
use App\Domains\Role\Models\Traits\Method\RoleMethod;
use App\Domains\Role\Models\Traits\Relationship\RoleRelationship;
use App\Domains\Role\Models\Traits\Scope\RoleScope;


/**
 * Class Role.
 */
class Role extends Model
{
    use SoftDeletes,
        RoleAttribute,
        RoleMethod,
        RoleRelationship,
        RoleScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'roles';

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