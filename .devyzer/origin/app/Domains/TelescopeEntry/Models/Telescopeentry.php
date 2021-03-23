<?php

namespace App\Domains\TelescopeEntry\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\TelescopeEntry\Models\Traits\Attribute\TelescopeentryAttribute;
use App\Domains\TelescopeEntry\Models\Traits\Method\TelescopeentryMethod;
use App\Domains\TelescopeEntry\Models\Traits\Relationship\TelescopeentryRelationship;
use App\Domains\TelescopeEntry\Models\Traits\Scope\TelescopeentryScope;


/**
 * Class Telescopeentry.
 */
class Telescopeentry extends Model
{
    use SoftDeletes,
        TelescopeentryAttribute,
        TelescopeentryMethod,
        TelescopeentryRelationship,
        TelescopeentryScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'telescope_entries';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "sequence",        "uuid",        "batch_id",        "family_hash",        "should_display_on_index",        "type",        "content",    ];

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