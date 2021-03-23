<?php

namespace App\Domains\Message\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Message\Models\Traits\Attribute\MessageAttribute;
use App\Domains\Message\Models\Traits\Method\MessageMethod;
use App\Domains\Message\Models\Traits\Relationship\MessageRelationship;
use App\Domains\Message\Models\Traits\Scope\MessageScope;


/**
 * Class Message.
 */
class Message extends Model
{
    use SoftDeletes,
        MessageAttribute,
        MessageMethod,
        MessageRelationship,
        MessageScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'messages';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "title",        "message",        "status",        "receiver_id",        "sender_id",        "content_type_id",        "type_id",        "location_id",    ];

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