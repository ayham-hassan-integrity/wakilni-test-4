<?php

namespace App\Domains\Comment\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Comment\Models\Traits\Attribute\CommentAttribute;
use App\Domains\Comment\Models\Traits\Method\CommentMethod;
use App\Domains\Comment\Models\Traits\Relationship\CommentRelationship;
use App\Domains\Comment\Models\Traits\Scope\CommentScope;


/**
 * Class Comment.
 */
class Comment extends Model
{
    use SoftDeletes,
        CommentAttribute,
        CommentMethod,
        CommentRelationship,
        CommentScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'comments';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "comment",        "is_public",        "order_id",        "user_id",    ];

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