<?php

namespace App\Domains\AppToken\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\AppToken\Models\Traits\Attribute\ApptokenAttribute;
use App\Domains\AppToken\Models\Traits\Method\ApptokenMethod;
use App\Domains\AppToken\Models\Traits\Relationship\ApptokenRelationship;
use App\Domains\AppToken\Models\Traits\Scope\ApptokenScope;


/**
 * Class Apptoken.
 */
class Apptoken extends Model
{
    use SoftDeletes,
        ApptokenAttribute,
        ApptokenMethod,
        ApptokenRelationship,
        ApptokenScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'apps_tokens';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "shop",        "access_token",        "customer_id",        "app_id",        "location_id",        "code",        "authenticated",        "remember_token",        "country_code",        "extra",    ];

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