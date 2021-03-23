<?php

use App\Domains\Vehicle\Http\Controllers\Backend\Vehicle\DeletedVehicleController;
use App\Domains\Vehicle\Http\Controllers\Backend\Vehicle\VehicleController;
use App\Domains\Vehicle\Models\Vehicle;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'vehicle',
    'as' => 'vehicle.',
], function () {

    Route::get('/', [VehicleController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Vehicles'), route('admin.vehicle.index'));
        });


    Route::get('deleted', [DeletedVehicleController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.vehicle.index')
                ->push(__('Deleted  Vehicles'), route('admin.vehicle.deleted'));
        });


    Route::get('create', [VehicleController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.vehicle.index')
                ->push(__('Create Vehicle'), route('admin.vehicle.create'));
        });

    Route::post('/', [VehicleController::class, 'store'])->name('store');

    Route::group(['prefix' => '{vehicle}'], function () {
        Route::get('/', [VehicleController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Vehicle $vehicle) {
                $trail->parent('admin.vehicle.index')
                    ->push($vehicle->id, route('admin.vehicle.show', $vehicle));
            });

        Route::get('edit', [VehicleController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Vehicle $vehicle) {
                $trail->parent('admin.vehicle.show', $vehicle)
                    ->push(__('Edit'), route('admin.vehicle.edit', $vehicle));
            });

        Route::patch('/', [VehicleController::class, 'update'])->name('update');
        Route::delete('/', [VehicleController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedVehicle}'], function () {
        Route::patch('restore', [DeletedVehicleController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedVehicleController::class, 'destroy'])->name('permanently-delete');
    });
});