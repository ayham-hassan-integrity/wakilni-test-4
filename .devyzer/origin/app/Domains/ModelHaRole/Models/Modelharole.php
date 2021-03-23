<?php

namespace App\Domains\ModelHaRole\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\ModelHaRole\Models\Traits\Attribute\ModelharoleAttribute;
use App\Domains\ModelHaRole\Models\Traits\Method\ModelharoleMethod;
use App\Domains\ModelHaRole\Models\Traits\Relationship\ModelharoleRelationship;
use App\Domains\ModelHaRole\Models\Traits\Scope\ModelharoleScope;


/**
 * Class Modelharole.
 */
class Modelharole extends Model
{
    use SoftDeletes,
        ModelharoleAttribute,
        ModelharoleMethod,
        ModelharoleRelationship,
        ModelharoleScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'model_has_roles';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "role_id",        "model_id",        "model_type",    ];

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