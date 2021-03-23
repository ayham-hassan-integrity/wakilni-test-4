<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

use App\Domains\Order\Http\Controllers\Api\Order\OrderController;

Route::group([
    'prefix' => 'order',
    'as' => 'order.',
], function () {

    Route::get('/', [OrderController::class, 'index'])->name('index');
    Route::post('/', [OrderController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [OrderController::class, 'show'])->name('show');
        Route::put('/', [OrderController::class, 'update'])->name('update');
        Route::delete('/', [OrderController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\OrderDetail\Http\Controllers\Api\Orderdetail\OrderdetailController;

Route::group([
    'prefix' => 'orderdetail',
    'as' => 'orderdetail.',
], function () {

    Route::get('/', [OrderdetailController::class, 'index'])->name('index');
    Route::post('/', [OrderdetailController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [OrderdetailController::class, 'show'])->name('show');
        Route::put('/', [OrderdetailController::class, 'update'])->name('update');
        Route::delete('/', [OrderdetailController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Office\Http\Controllers\Api\Office\OfficeController;

Route::group([
    'prefix' => 'office',
    'as' => 'office.',
], function () {

    Route::get('/', [OfficeController::class, 'index'])->name('index');
    Route::post('/', [OfficeController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [OfficeController::class, 'show'])->name('show');
        Route::put('/', [OfficeController::class, 'update'])->name('update');
        Route::delete('/', [OfficeController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\ObjectType\Http\Controllers\Api\Objecttype\ObjecttypeController;

Route::group([
    'prefix' => 'objecttype',
    'as' => 'objecttype.',
], function () {

    Route::get('/', [ObjecttypeController::class, 'index'])->name('index');
    Route::post('/', [ObjecttypeController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [ObjecttypeController::class, 'show'])->name('show');
        Route::put('/', [ObjecttypeController::class, 'update'])->name('update');
        Route::delete('/', [ObjecttypeController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Notification\Http\Controllers\Api\Notification\NotificationController;

Route::group([
    'prefix' => 'notification',
    'as' => 'notification.',
], function () {

    Route::get('/', [NotificationController::class, 'index'])->name('index');
    Route::post('/', [NotificationController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [NotificationController::class, 'show'])->name('show');
        Route::put('/', [NotificationController::class, 'update'])->name('update');
        Route::delete('/', [NotificationController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\ModelHaRole\Http\Controllers\Api\Modelharole\ModelharoleController;

Route::group([
    'prefix' => 'modelharole',
    'as' => 'modelharole.',
], function () {

    Route::get('/', [ModelharoleController::class, 'index'])->name('index');
    Route::post('/', [ModelharoleController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [ModelharoleController::class, 'show'])->name('show');
        Route::put('/', [ModelharoleController::class, 'update'])->name('update');
        Route::delete('/', [ModelharoleController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\ModelHaPermission\Http\Controllers\Api\Modelhapermission\ModelhapermissionController;

Route::group([
    'prefix' => 'modelhapermission',
    'as' => 'modelhapermission.',
], function () {

    Route::get('/', [ModelhapermissionController::class, 'index'])->name('index');
    Route::post('/', [ModelhapermissionController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [ModelhapermissionController::class, 'show'])->name('show');
        Route::put('/', [ModelhapermissionController::class, 'update'])->name('update');
        Route::delete('/', [ModelhapermissionController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Migration\Http\Controllers\Api\Migration\MigrationController;

Route::group([
    'prefix' => 'migration',
    'as' => 'migration.',
], function () {

    Route::get('/', [MigrationController::class, 'index'])->name('index');
    Route::post('/', [MigrationController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [MigrationController::class, 'show'])->name('show');
        Route::put('/', [MigrationController::class, 'update'])->name('update');
        Route::delete('/', [MigrationController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Message\Http\Controllers\Api\Message\MessageController;

Route::group([
    'prefix' => 'message',
    'as' => 'message.',
], function () {

    Route::get('/', [MessageController::class, 'index'])->name('index');
    Route::post('/', [MessageController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [MessageController::class, 'show'])->name('show');
        Route::put('/', [MessageController::class, 'update'])->name('update');
        Route::delete('/', [MessageController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Location\Http\Controllers\Api\Location\LocationController;

Route::group([
    'prefix' => 'location',
    'as' => 'location.',
], function () {

    Route::get('/', [LocationController::class, 'index'])->name('index');
    Route::post('/', [LocationController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [LocationController::class, 'show'])->name('show');
        Route::put('/', [LocationController::class, 'update'])->name('update');
        Route::delete('/', [LocationController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\LocationLog\Http\Controllers\Api\Locationlog\LocationlogController;

Route::group([
    'prefix' => 'locationlog',
    'as' => 'locationlog.',
], function () {

    Route::get('/', [LocationlogController::class, 'index'])->name('index');
    Route::post('/', [LocationlogController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [LocationlogController::class, 'show'])->name('show');
        Route::put('/', [LocationlogController::class, 'update'])->name('update');
        Route::delete('/', [LocationlogController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\FlatOrder\Http\Controllers\Api\Flatorder\FlatorderController;

Route::group([
    'prefix' => 'flatorder',
    'as' => 'flatorder.',
], function () {

    Route::get('/', [FlatorderController::class, 'index'])->name('index');
    Route::post('/', [FlatorderController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [FlatorderController::class, 'show'])->name('show');
        Route::put('/', [FlatorderController::class, 'update'])->name('update');
        Route::delete('/', [FlatorderController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\File\Http\Controllers\Api\File\FileController;

Route::group([
    'prefix' => 'file',
    'as' => 'file.',
], function () {

    Route::get('/', [FileController::class, 'index'])->name('index');
    Route::post('/', [FileController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [FileController::class, 'show'])->name('show');
        Route::put('/', [FileController::class, 'update'])->name('update');
        Route::delete('/', [FileController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\FailedJob\Http\Controllers\Api\Failedjob\FailedjobController;

Route::group([
    'prefix' => 'failedjob',
    'as' => 'failedjob.',
], function () {

    Route::get('/', [FailedjobController::class, 'index'])->name('index');
    Route::post('/', [FailedjobController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [FailedjobController::class, 'show'])->name('show');
        Route::put('/', [FailedjobController::class, 'update'])->name('update');
        Route::delete('/', [FailedjobController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\DriverZone\Http\Controllers\Api\Driverzone\DriverzoneController;

Route::group([
    'prefix' => 'driverzone',
    'as' => 'driverzone.',
], function () {

    Route::get('/', [DriverzoneController::class, 'index'])->name('index');
    Route::post('/', [DriverzoneController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [DriverzoneController::class, 'show'])->name('show');
        Route::put('/', [DriverzoneController::class, 'update'])->name('update');
        Route::delete('/', [DriverzoneController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\DriverVehicle\Http\Controllers\Api\Drivervehicle\DrivervehicleController;

Route::group([
    'prefix' => 'drivervehicle',
    'as' => 'drivervehicle.',
], function () {

    Route::get('/', [DrivervehicleController::class, 'index'])->name('index');
    Route::post('/', [DrivervehicleController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [DrivervehicleController::class, 'show'])->name('show');
        Route::put('/', [DrivervehicleController::class, 'update'])->name('update');
        Route::delete('/', [DrivervehicleController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\DriverStock\Http\Controllers\Api\Driverstock\DriverstockController;

Route::group([
    'prefix' => 'driverstock',
    'as' => 'driverstock.',
], function () {

    Route::get('/', [DriverstockController::class, 'index'])->name('index');
    Route::post('/', [DriverstockController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [DriverstockController::class, 'show'])->name('show');
        Route::put('/', [DriverstockController::class, 'update'])->name('update');
        Route::delete('/', [DriverstockController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Driver\Http\Controllers\Api\Driver\DriverController;

Route::group([
    'prefix' => 'driver',
    'as' => 'driver.',
], function () {

    Route::get('/', [DriverController::class, 'index'])->name('index');
    Route::post('/', [DriverController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [DriverController::class, 'show'])->name('show');
        Route::put('/', [DriverController::class, 'update'])->name('update');
        Route::delete('/', [DriverController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\DriverSubmission\Http\Controllers\Api\Driversubmission\DriversubmissionController;

Route::group([
    'prefix' => 'driversubmission',
    'as' => 'driversubmission.',
], function () {

    Route::get('/', [DriversubmissionController::class, 'index'])->name('index');
    Route::post('/', [DriversubmissionController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [DriversubmissionController::class, 'show'])->name('show');
        Route::put('/', [DriversubmissionController::class, 'update'])->name('update');
        Route::delete('/', [DriversubmissionController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Device\Http\Controllers\Api\Device\DeviceController;

Route::group([
    'prefix' => 'device',
    'as' => 'device.',
], function () {

    Route::get('/', [DeviceController::class, 'index'])->name('index');
    Route::post('/', [DeviceController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [DeviceController::class, 'show'])->name('show');
        Route::put('/', [DeviceController::class, 'update'])->name('update');
        Route::delete('/', [DeviceController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\CustomerOperator\Http\Controllers\Api\Customeroperator\CustomeroperatorController;

Route::group([
    'prefix' => 'customeroperator',
    'as' => 'customeroperator.',
], function () {

    Route::get('/', [CustomeroperatorController::class, 'index'])->name('index');
    Route::post('/', [CustomeroperatorController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [CustomeroperatorController::class, 'show'])->name('show');
        Route::put('/', [CustomeroperatorController::class, 'update'])->name('update');
        Route::delete('/', [CustomeroperatorController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\CustomerCurrency\Http\Controllers\Api\Customercurrency\CustomercurrencyController;

Route::group([
    'prefix' => 'customercurrency',
    'as' => 'customercurrency.',
], function () {

    Route::get('/', [CustomercurrencyController::class, 'index'])->name('index');
    Route::post('/', [CustomercurrencyController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [CustomercurrencyController::class, 'show'])->name('show');
        Route::put('/', [CustomercurrencyController::class, 'update'])->name('update');
        Route::delete('/', [CustomercurrencyController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Customer\Http\Controllers\Api\Customer\CustomerController;

Route::group([
    'prefix' => 'customer',
    'as' => 'customer.',
], function () {

    Route::get('/', [CustomerController::class, 'index'])->name('index');
    Route::post('/', [CustomerController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [CustomerController::class, 'show'])->name('show');
        Route::put('/', [CustomerController::class, 'update'])->name('update');
        Route::delete('/', [CustomerController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\CustomerPrice\Http\Controllers\Api\Customerprice\CustomerpriceController;

Route::group([
    'prefix' => 'customerprice',
    'as' => 'customerprice.',
], function () {

    Route::get('/', [CustomerpriceController::class, 'index'])->name('index');
    Route::post('/', [CustomerpriceController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [CustomerpriceController::class, 'show'])->name('show');
        Route::put('/', [CustomerpriceController::class, 'update'])->name('update');
        Route::delete('/', [CustomerpriceController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Currency\Http\Controllers\Api\Currency\CurrencyController;

Route::group([
    'prefix' => 'currency',
    'as' => 'currency.',
], function () {

    Route::get('/', [CurrencyController::class, 'index'])->name('index');
    Route::post('/', [CurrencyController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [CurrencyController::class, 'show'])->name('show');
        Route::put('/', [CurrencyController::class, 'update'])->name('update');
        Route::delete('/', [CurrencyController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Contact\Http\Controllers\Api\Contact\ContactController;

Route::group([
    'prefix' => 'contact',
    'as' => 'contact.',
], function () {

    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/', [ContactController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [ContactController::class, 'show'])->name('show');
        Route::put('/', [ContactController::class, 'update'])->name('update');
        Route::delete('/', [ContactController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Comment\Http\Controllers\Api\Comment\CommentController;

Route::group([
    'prefix' => 'comment',
    'as' => 'comment.',
], function () {

    Route::get('/', [CommentController::class, 'index'])->name('index');
    Route::post('/', [CommentController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [CommentController::class, 'show'])->name('show');
        Route::put('/', [CommentController::class, 'update'])->name('update');
        Route::delete('/', [CommentController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Collection\Http\Controllers\Api\Collection\CollectionController;

Route::group([
    'prefix' => 'collection',
    'as' => 'collection.',
], function () {

    Route::get('/', [CollectionController::class, 'index'])->name('index');
    Route::post('/', [CollectionController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [CollectionController::class, 'show'])->name('show');
        Route::put('/', [CollectionController::class, 'update'])->name('update');
        Route::delete('/', [CollectionController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Barcode\Http\Controllers\Api\Barcode\BarcodeController;

Route::group([
    'prefix' => 'barcode',
    'as' => 'barcode.',
], function () {

    Route::get('/', [BarcodeController::class, 'index'])->name('index');
    Route::post('/', [BarcodeController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [BarcodeController::class, 'show'])->name('show');
        Route::put('/', [BarcodeController::class, 'update'])->name('update');
        Route::delete('/', [BarcodeController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Area\Http\Controllers\Api\Area\AreaController;

Route::group([
    'prefix' => 'area',
    'as' => 'area.',
], function () {

    Route::get('/', [AreaController::class, 'index'])->name('index');
    Route::post('/', [AreaController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [AreaController::class, 'show'])->name('show');
        Route::put('/', [AreaController::class, 'update'])->name('update');
        Route::delete('/', [AreaController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\AppToken\Http\Controllers\Api\Apptoken\ApptokenController;

Route::group([
    'prefix' => 'apptoken',
    'as' => 'apptoken.',
], function () {

    Route::get('/', [ApptokenController::class, 'index'])->name('index');
    Route::post('/', [ApptokenController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [ApptokenController::class, 'show'])->name('show');
        Route::put('/', [ApptokenController::class, 'update'])->name('update');
        Route::delete('/', [ApptokenController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\App\Http\Controllers\Api\App\AppController;

Route::group([
    'prefix' => 'app',
    'as' => 'app.',
], function () {

    Route::get('/', [AppController::class, 'index'])->name('index');
    Route::post('/', [AppController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [AppController::class, 'show'])->name('show');
        Route::put('/', [AppController::class, 'update'])->name('update');
        Route::delete('/', [AppController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\Amount\Http\Controllers\Api\Amount\AmountController;

Route::group([
    'prefix' => 'amount',
    'as' => 'amount.',
], function () {

    Route::get('/', [AmountController::class, 'index'])->name('index');
    Route::post('/', [AmountController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [AmountController::class, 'show'])->name('show');
        Route::put('/', [AmountController::class, 'update'])->name('update');
        Route::delete('/', [AmountController::class, 'delete'])->name('destroy');
    });
});

use App\Domains\ActivityLog\Http\Controllers\Api\Activitylog\ActivitylogController;

Route::group([
    'prefix' => 'activitylog',
    'as' => 'activitylog.',
], function () {

    Route::get('/', [ActivitylogController::class, 'index'])->name('index');
    Route::post('/', [ActivitylogController::class, 'store'])->name('store');
    Route::group(['prefix' => '{project}'], function () {
        Route::get('/', [ActivitylogController::class, 'show'])->name('show');
        Route::put('/', [ActivitylogController::class, 'update'])->name('update');
        Route::delete('/', [ActivitylogController::class, 'delete'])->name('destroy');
    });
});
