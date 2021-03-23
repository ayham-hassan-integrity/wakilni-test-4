<?php

namespace App\Domains\SettingStore\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\SettingStore\Models\Traits\Attribute\SettingstoreAttribute;
use App\Domains\SettingStore\Models\Traits\Method\SettingstoreMethod;
use App\Domains\SettingStore\Models\Traits\Relationship\SettingstoreRelationship;
use App\Domains\SettingStore\Models\Traits\Scope\SettingstoreScope;


/**
 * Class Settingstore.
 */
class Settingstore extends Model
{
    use SoftDeletes,
        SettingstoreAttribute,
        SettingstoreMethod,
        SettingstoreRelationship,
        SettingstoreScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'settings_store';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "store_id",        "setting_id",        "value",    ];

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