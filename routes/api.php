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
