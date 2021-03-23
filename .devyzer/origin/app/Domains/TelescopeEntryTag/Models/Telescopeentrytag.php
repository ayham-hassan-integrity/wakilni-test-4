<?php

namespace App\Domains\TelescopeEntryTag\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\TelescopeEntryTag\Models\Traits\Attribute\TelescopeentrytagAttribute;
use App\Domains\TelescopeEntryTag\Models\Traits\Method\TelescopeentrytagMethod;
use App\Domains\TelescopeEntryTag\Models\Traits\Relationship\TelescopeentrytagRelationship;
use App\Domains\TelescopeEntryTag\Models\Traits\Scope\TelescopeentrytagScope;


/**
 * Class Telescopeentrytag.
 */
class Telescopeentrytag extends Model
{
    use SoftDeletes,
        TelescopeentrytagAttribute,
        TelescopeentrytagMethod,
        TelescopeentrytagRelationship,
        TelescopeentrytagScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'telescope_entries_tags';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "entry_uuid",        "tag",    ];

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