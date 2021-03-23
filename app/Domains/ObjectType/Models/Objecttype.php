<?php

namespace App\Domains\ObjectType\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\ObjectType\Models\Traits\Attribute\ObjecttypeAttribute;
use App\Domains\ObjectType\Models\Traits\Method\ObjecttypeMethod;
use App\Domains\ObjectType\Models\Traits\Relationship\ObjecttypeRelationship;
use App\Domains\ObjectType\Models\Traits\Scope\ObjecttypeScope;


/**
 * Class Objecttype.
 */
class Objecttype extends Model
{
    use SoftDeletes,
        ObjecttypeAttribute,
        ObjecttypeMethod,
        ObjecttypeRelationship,
        ObjecttypeScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'object_types';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "type",        "label",    ];

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