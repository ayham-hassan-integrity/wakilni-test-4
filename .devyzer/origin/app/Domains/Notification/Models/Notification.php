<?php

namespace App\Domains\Notification\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Notification\Models\Traits\Attribute\NotificationAttribute;
use App\Domains\Notification\Models\Traits\Method\NotificationMethod;
use App\Domains\Notification\Models\Traits\Relationship\NotificationRelationship;
use App\Domains\Notification\Models\Traits\Scope\NotificationScope;


/**
 * Class Notification.
 */
class Notification extends Model
{
    use SoftDeletes,
        NotificationAttribute,
        NotificationMethod,
        NotificationRelationship,
        NotificationScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'notifications';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "type_id",        "notifiable_id",        "notifiable_type",        "data",        "read_at",        "objectable_id",        "objectable_type",    ];

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