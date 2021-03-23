<?php

use App\Domains\Driver\Http\Controllers\Backend\Driver\DeletedDriverController;
use App\Domains\Driver\Http\Controllers\Backend\Driver\DriverController;
use App\Domains\Driver\Models\Driver;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'driver',
    'as' => 'driver.',
], function () {

    Route::get('/', [DriverController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Drivers'), route('admin.driver.index'));
        });


    Route::get('deleted', [DeletedDriverController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.driver.index')
                ->push(__('Deleted  Drivers'), route('admin.driver.deleted'));
        });


    Route::get('create', [DriverController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.driver.index')
                ->push(__('Create Driver'), route('admin.driver.create'));
        });

    Route::post('/', [DriverController::class, 'store'])->name('store');

    Route::group(['prefix' => '{driver}'], function () {
        Route::get('/', [DriverController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Driver $driver) {
                $trail->parent('admin.driver.index')
                    ->push($driver->id, route('admin.driver.show', $driver));
            });

        Route::get('edit', [DriverController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Driver $driver) {
                $trail->parent('admin.driver.show', $driver)
                    ->push(__('Edit'), route('admin.driver.edit', $driver));
            });

        Route::patch('/', [DriverController::class, 'update'])->name('update');
        Route::delete('/', [DriverController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedDriver}'], function () {
        Route::patch('restore', [DeletedDriverController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedDriverController::class, 'destroy'])->name('permanently-delete');
    });
});