<?php

namespace App\Domains\Barcode\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

use App\Domains\Barcode\Models\Traits\Attribute\BarcodeAttribute;
use App\Domains\Barcode\Models\Traits\Method\BarcodeMethod;
use App\Domains\Barcode\Models\Traits\Relationship\BarcodeRelationship;
use App\Domains\Barcode\Models\Traits\Scope\BarcodeScope;


/**
 * Class Barcode.
 */
class Barcode extends Model
{
    use SoftDeletes,
        BarcodeAttribute,
        BarcodeMethod,
        BarcodeRelationship,
        BarcodeScope;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'barcodes';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [         "status",        "barcode_order_number",        "pickup_order_id",        "pickup_task_id",        "pickup_driver_id",        "delivery_order_id",        "customer_id",        "scanned_at",    ];

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
    "scanned_at",
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