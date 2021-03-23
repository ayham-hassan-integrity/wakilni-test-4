<?php

use App\Domains\Device\Http\Controllers\Backend\Device\DeletedDeviceController;
use App\Domains\Device\Http\Controllers\Backend\Device\DeviceController;
use App\Domains\Device\Models\Device;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'device',
    'as' => 'device.',
], function () {

    Route::get('/', [DeviceController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Devices'), route('admin.device.index'));
        });


    Route::get('deleted', [DeletedDeviceController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.device.index')
                ->push(__('Deleted  Devices'), route('admin.device.deleted'));
        });


    Route::get('create', [DeviceController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.device.index')
                ->push(__('Create Device'), route('admin.device.create'));
        });

    Route::post('/', [DeviceController::class, 'store'])->name('store');

    Route::group(['prefix' => '{device}'], function () {
        Route::get('/', [DeviceController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Device $device) {
                $trail->parent('admin.device.index')
                    ->push($device->id, route('admin.device.show', $device));
            });

        Route::get('edit', [DeviceController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Device $device) {
                $trail->parent('admin.device.show', $device)
                    ->push(__('Edit'), route('admin.device.edit', $device));
            });

        Route::patch('/', [DeviceController::class, 'update'])->name('update');
        Route::delete('/', [DeviceController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedDevice}'], function () {
        Route::patch('restore', [DeletedDeviceController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedDeviceController::class, 'destroy'])->name('permanently-delete');
    });
});