<?php

namespace App\Domains\PasswordReset\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\PasswordReset\Models\Traits\Attribute\PasswordresetAttribute;
use App\Domains\PasswordReset\Models\Traits\Method\PasswordresetMethod;
use App\Domains\PasswordReset\Models\Traits\Relationship\PasswordresetRelationship;
use App\Domains\PasswordReset\Models\Traits\Scope\PasswordresetScope;


/**
 * Class Passwordreset.
 */
class Passwordreset extends Model
{
    use SoftDeletes,
        PasswordresetAttribute,
        PasswordresetMethod,
        PasswordresetRelationship,
        PasswordresetScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'password_resets';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "email",        "token",    ];

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