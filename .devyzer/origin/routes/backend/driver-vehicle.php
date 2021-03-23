<?php

use App\Domains\DriverVehicle\Http\Controllers\Backend\Drivervehicle\DeletedDrivervehicleController;
use App\Domains\DriverVehicle\Http\Controllers\Backend\Drivervehicle\DrivervehicleController;
use App\Domains\DriverVehicle\Models\Drivervehicle;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'drivervehicle',
    'as' => 'drivervehicle.',
], function () {

    Route::get('/', [DrivervehicleController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Drivervehicles'), route('admin.drivervehicle.index'));
        });


    Route::get('deleted', [DeletedDrivervehicleController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.drivervehicle.index')
                ->push(__('Deleted  Drivervehicles'), route('admin.drivervehicle.deleted'));
        });


    Route::get('create', [DrivervehicleController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.drivervehicle.index')
                ->push(__('Create Drivervehicle'), route('admin.drivervehicle.create'));
        });

    Route::post('/', [DrivervehicleController::class, 'store'])->name('store');

    Route::group(['prefix' => '{drivervehicle}'], function () {
        Route::get('/', [DrivervehicleController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Drivervehicle $drivervehicle) {
                $trail->parent('admin.drivervehicle.index')
                    ->push($drivervehicle->id, route('admin.drivervehicle.show', $drivervehicle));
            });

        Route::get('edit', [DrivervehicleController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Drivervehicle $drivervehicle) {
                $trail->parent('admin.drivervehicle.show', $drivervehicle)
                    ->push(__('Edit'), route('admin.drivervehicle.edit', $drivervehicle));
            });

        Route::patch('/', [DrivervehicleController::class, 'update'])->name('update');
        Route::delete('/', [DrivervehicleController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedDrivervehicle}'], function () {
        Route::patch('restore', [DeletedDrivervehicleController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedDrivervehicleController::class, 'destroy'])->name('permanently-delete');
    });
});