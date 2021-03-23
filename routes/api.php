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
