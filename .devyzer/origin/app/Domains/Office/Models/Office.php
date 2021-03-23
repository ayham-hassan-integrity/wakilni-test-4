<?php

namespace App\Domains\Office\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Office\Models\Traits\Attribute\OfficeAttribute;
use App\Domains\Office\Models\Traits\Method\OfficeMethod;
use App\Domains\Office\Models\Traits\Relationship\OfficeRelationship;
use App\Domains\Office\Models\Traits\Scope\OfficeScope;


/**
 * Class Office.
 */
class Office extends Model
{
    use SoftDeletes,
        OfficeAttribute,
        OfficeMethod,
        OfficeRelationship,
        OfficeScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'offices';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "name",        "area",        "store_id",        "phone_number",    ];

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