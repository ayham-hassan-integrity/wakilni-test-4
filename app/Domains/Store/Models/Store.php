<?php

namespace App\Domains\Store\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Store\Models\Traits\Attribute\StoreAttribute;
use App\Domains\Store\Models\Traits\Method\StoreMethod;
use App\Domains\Store\Models\Traits\Relationship\StoreRelationship;
use App\Domains\Store\Models\Traits\Scope\StoreScope;


/**
 * Class Store.
 */
class Store extends Model
{
    use SoftDeletes,
        StoreAttribute,
        StoreMethod,
        StoreRelationship,
        StoreScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'stores';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "name",        "prefix",        "area",    ];

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