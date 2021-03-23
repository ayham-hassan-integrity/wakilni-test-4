<?php

namespace App\Domains\App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\App\Models\Traits\Attribute\AppAttribute;
use App\Domains\App\Models\Traits\Method\AppMethod;
use App\Domains\App\Models\Traits\Relationship\AppRelationship;
use App\Domains\App\Models\Traits\Scope\AppScope;


/**
 * Class App.
 */
class App extends Model
{
    use SoftDeletes,
        AppAttribute,
        AppMethod,
        AppRelationship,
        AppScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'apps';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "name",        "public",        "client_id",        "client_secret",        "random_authentication",        "in_house_development",    ];

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