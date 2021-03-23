<?php

namespace App\Domains\Review\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Review\Models\Traits\Attribute\ReviewAttribute;
use App\Domains\Review\Models\Traits\Method\ReviewMethod;
use App\Domains\Review\Models\Traits\Relationship\ReviewRelationship;
use App\Domains\Review\Models\Traits\Scope\ReviewScope;


/**
 * Class Review.
 */
class Review extends Model
{
    use SoftDeletes,
        ReviewAttribute,
        ReviewMethod,
        ReviewRelationship,
        ReviewScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'reviews';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "order_id",        "customer_id",        "recipient_id",        "rate",        "feedback_message",        "viewed",    ];

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