<?php

use App\Domains\DriverStock\Http\Controllers\Backend\Driverstock\DeletedDriverstockController;
use App\Domains\DriverStock\Http\Controllers\Backend\Driverstock\DriverstockController;
use App\Domains\DriverStock\Models\Driverstock;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'driverstock',
    'as' => 'driverstock.',
], function () {

    Route::get('/', [DriverstockController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Driverstocks'), route('admin.driverstock.index'));
        });


    Route::get('deleted', [DeletedDriverstockController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.driverstock.index')
                ->push(__('Deleted  Driverstocks'), route('admin.driverstock.deleted'));
        });


    Route::get('create', [DriverstockController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.driverstock.index')
                ->push(__('Create Driverstock'), route('admin.driverstock.create'));
        });

    Route::post('/', [DriverstockController::class, 'store'])->name('store');

    Route::group(['prefix' => '{driverstock}'], function () {
        Route::get('/', [DriverstockController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Driverstock $driverstock) {
                $trail->parent('admin.driverstock.index')
                    ->push($driverstock->id, route('admin.driverstock.show', $driverstock));
            });

        Route::get('edit', [DriverstockController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Driverstock $driverstock) {
                $trail->parent('admin.driverstock.show', $driverstock)
                    ->push(__('Edit'), route('admin.driverstock.edit', $driverstock));
            });

        Route::patch('/', [DriverstockController::class, 'update'])->name('update');
        Route::delete('/', [DriverstockController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedDriverstock}'], function () {
        Route::patch('restore', [DeletedDriverstockController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedDriverstockController::class, 'destroy'])->name('permanently-delete');
    });
});