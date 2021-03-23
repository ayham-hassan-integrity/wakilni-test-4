<?php

namespace App\Domains\DriverSubmission\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\DriverSubmission\Models\Traits\Attribute\DriversubmissionAttribute;
use App\Domains\DriverSubmission\Models\Traits\Method\DriversubmissionMethod;
use App\Domains\DriverSubmission\Models\Traits\Relationship\DriversubmissionRelationship;
use App\Domains\DriverSubmission\Models\Traits\Scope\DriversubmissionScope;


/**
 * Class Driversubmission.
 */
class Driversubmission extends Model
{
    use SoftDeletes,
        DriversubmissionAttribute,
        DriversubmissionMethod,
        DriversubmissionRelationship,
        DriversubmissionScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'driver_submissions';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "goal_amount",        "note",        "status",        "driver_id",        "operator_note",    ];

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