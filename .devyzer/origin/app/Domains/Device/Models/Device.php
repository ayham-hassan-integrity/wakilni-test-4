<?php

namespace App\Domains\Device\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Device\Models\Traits\Attribute\DeviceAttribute;
use App\Domains\Device\Models\Traits\Method\DeviceMethod;
use App\Domains\Device\Models\Traits\Relationship\DeviceRelationship;
use App\Domains\Device\Models\Traits\Scope\DeviceScope;


/**
 * Class Device.
 */
class Device extends Model
{
    use SoftDeletes,
        DeviceAttribute,
        DeviceMethod,
        DeviceRelationship,
        DeviceScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'devices';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "user_id",        "type",        "token",    ];

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