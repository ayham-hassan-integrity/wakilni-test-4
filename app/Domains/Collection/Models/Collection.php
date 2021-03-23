<?php

namespace App\Domains\Collection\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Collection\Models\Traits\Attribute\CollectionAttribute;
use App\Domains\Collection\Models\Traits\Method\CollectionMethod;
use App\Domains\Collection\Models\Traits\Relationship\CollectionRelationship;
use App\Domains\Collection\Models\Traits\Scope\CollectionScope;


/**
 * Class Collection.
 */
class Collection extends Model
{
    use SoftDeletes,
        CollectionAttribute,
        CollectionMethod,
        CollectionRelationship,
        CollectionScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'collections';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "amount",        "task_id",        "type_id",        "currency_id",        "order_id",    ];

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