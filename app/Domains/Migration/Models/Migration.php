<?php

namespace App\Domains\Migration\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Migration\Models\Traits\Attribute\MigrationAttribute;
use App\Domains\Migration\Models\Traits\Method\MigrationMethod;
use App\Domains\Migration\Models\Traits\Relationship\MigrationRelationship;
use App\Domains\Migration\Models\Traits\Scope\MigrationScope;


/**
 * Class Migration.
 */
class Migration extends Model
{
    use SoftDeletes,
        MigrationAttribute,
        MigrationMethod,
        MigrationRelationship,
        MigrationScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'migrations';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "migration",        "batch",    ];

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