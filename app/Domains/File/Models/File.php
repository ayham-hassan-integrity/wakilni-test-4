<?php

namespace App\Domains\File\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\File\Models\Traits\Attribute\FileAttribute;
use App\Domains\File\Models\Traits\Method\FileMethod;
use App\Domains\File\Models\Traits\Relationship\FileRelationship;
use App\Domains\File\Models\Traits\Scope\FileScope;


/**
 * Class File.
 */
class File extends Model
{
    use SoftDeletes,
        FileAttribute,
        FileMethod,
        FileRelationship,
        FileScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'files';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "mime",        "filename",        "size",        "storage_path",        "disk",        "status",        "fileable_id",        "fileable_type",    ];

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