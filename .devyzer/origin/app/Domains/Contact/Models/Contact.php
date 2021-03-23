<?php

namespace App\Domains\Contact\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Contact\Models\Traits\Attribute\ContactAttribute;
use App\Domains\Contact\Models\Traits\Method\ContactMethod;
use App\Domains\Contact\Models\Traits\Relationship\ContactRelationship;
use App\Domains\Contact\Models\Traits\Scope\ContactScope;


/**
 * Class Contact.
 */
class Contact extends Model
{
    use SoftDeletes,
        ContactAttribute,
        ContactMethod,
        ContactRelationship,
        ContactScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'contacts';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "first_name",        "last_name",        "phone_number",        "date_of_birth",        "gender",        "is_active",    ];

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
    "date_of_birth",
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