<?php

namespace App\Domains\User\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\User\Models\Traits\Attribute\UserAttribute;
use App\Domains\User\Models\Traits\Method\UserMethod;
use App\Domains\User\Models\Traits\Relationship\UserRelationship;
use App\Domains\User\Models\Traits\Scope\UserScope;


/**
 * Class User.
 */
class User extends Model
{
    use SoftDeletes,
        UserAttribute,
        UserMethod,
        UserRelationship,
        UserScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'users';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "email",        "phone_number",        "password",        "pattern",        "start_date",        "office_id",        "remember_token",        "contact_id",        "customer_id",        "last_login",        "is_active",        "language_type",        "time_zone",        "provider_name",        "provider_token",    ];

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
    "start_date",
    "last_login",
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