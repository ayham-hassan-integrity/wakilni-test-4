<?php

namespace App\Domains\Stock\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Stock\Models\Traits\Attribute\StockAttribute;
use App\Domains\Stock\Models\Traits\Method\StockMethod;
use App\Domains\Stock\Models\Traits\Relationship\StockRelationship;
use App\Domains\Stock\Models\Traits\Scope\StockScope;


/**
 * Class Stock.
 */
class Stock extends Model
{
    use SoftDeletes,
        StockAttribute,
        StockMethod,
        StockRelationship,
        StockScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'stocks';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "label",        "amount",        "type_id",        "size_id",    ];

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