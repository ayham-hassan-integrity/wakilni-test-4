<?php

namespace App\Domains\Package\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Package\Models\Traits\Attribute\PackageAttribute;
use App\Domains\Package\Models\Traits\Method\PackageMethod;
use App\Domains\Package\Models\Traits\Relationship\PackageRelationship;
use App\Domains\Package\Models\Traits\Scope\PackageScope;


/**
 * Class Package.
 */
class Package extends Model
{
    use SoftDeletes,
        PackageAttribute,
        PackageMethod,
        PackageRelationship,
        PackageScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'packages';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "quantity",        "trip_number",        "type_id",        "order_details_id",    ];

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