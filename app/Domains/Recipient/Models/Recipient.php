<?php

namespace App\Domains\Recipient\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Recipient\Models\Traits\Attribute\RecipientAttribute;
use App\Domains\Recipient\Models\Traits\Method\RecipientMethod;
use App\Domains\Recipient\Models\Traits\Relationship\RecipientRelationship;
use App\Domains\Recipient\Models\Traits\Scope\RecipientScope;


/**
 * Class Recipient.
 */
class Recipient extends Model
{
    use SoftDeletes,
        RecipientAttribute,
        RecipientMethod,
        RecipientRelationship,
        RecipientScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'recipients';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "first_name",        "last_name",        "phone_number",        "date_of_birth",        "gender",        "email",        "note",        "allow_driver_contact",        "viewer_id",        "contact_id",        "default_address_id",        "secondary_phone_number",        "app_token_id",        "app_ref_id",    ];

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