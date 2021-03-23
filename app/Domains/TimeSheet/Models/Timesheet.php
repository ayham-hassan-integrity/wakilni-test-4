<?php

namespace App\Domains\TimeSheet\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\TimeSheet\Models\Traits\Attribute\TimesheetAttribute;
use App\Domains\TimeSheet\Models\Traits\Method\TimesheetMethod;
use App\Domains\TimeSheet\Models\Traits\Relationship\TimesheetRelationship;
use App\Domains\TimeSheet\Models\Traits\Scope\TimesheetScope;


/**
 * Class Timesheet.
 */
class Timesheet extends Model
{
    use SoftDeletes,
        TimesheetAttribute,
        TimesheetMethod,
        TimesheetRelationship,
        TimesheetScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'time_sheets';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "from",        "to",        "note",        "user_id",        "status",    ];

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
    "from",
    "to",
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