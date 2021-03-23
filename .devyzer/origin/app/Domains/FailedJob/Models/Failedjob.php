<?php

namespace App\Domains\FailedJob\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\FailedJob\Models\Traits\Attribute\FailedjobAttribute;
use App\Domains\FailedJob\Models\Traits\Method\FailedjobMethod;
use App\Domains\FailedJob\Models\Traits\Relationship\FailedjobRelationship;
use App\Domains\FailedJob\Models\Traits\Scope\FailedjobScope;


/**
 * Class Failedjob.
 */
class Failedjob extends Model
{
    use SoftDeletes,
        FailedjobAttribute,
        FailedjobMethod,
        FailedjobRelationship,
        FailedjobScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'failed_jobs';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "connection",        "queue",        "payload",        "exception",        "failed_at",    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];



    /**
     * @var array
     */
    protected $dates = [
    "deleted_at",
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