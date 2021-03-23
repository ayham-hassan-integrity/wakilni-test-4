<?php

namespace App\Domains\Setting\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Setting\Models\Traits\Attribute\SettingAttribute;
use App\Domains\Setting\Models\Traits\Method\SettingMethod;
use App\Domains\Setting\Models\Traits\Relationship\SettingRelationship;
use App\Domains\Setting\Models\Traits\Scope\SettingScope;


/**
 * Class Setting.
 */
class Setting extends Model
{
    use SoftDeletes,
        SettingAttribute,
        SettingMethod,
        SettingRelationship,
        SettingScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'settings';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "name",    ];

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