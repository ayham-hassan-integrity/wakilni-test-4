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
