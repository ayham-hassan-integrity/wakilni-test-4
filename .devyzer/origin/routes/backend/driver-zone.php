<?php

use App\Domains\DriverZone\Http\Controllers\Backend\Driverzone\DeletedDriverzoneController;
use App\Domains\DriverZone\Http\Controllers\Backend\Driverzone\DriverzoneController;
use App\Domains\DriverZone\Models\Driverzone;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'driverzone',
    'as' => 'driverzone.',
], function () {

    Route::get('/', [DriverzoneController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Driverzones'), route('admin.driverzone.index'));
        });


    Route::get('deleted', [DeletedDriverzoneController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.driverzone.index')
                ->push(__('Deleted  Driverzones'), route('admin.driverzone.deleted'));
        });


    Route::get('create', [DriverzoneController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.driverzone.index')
                ->push(__('Create Driverzone'), route('admin.driverzone.create'));
        });

    Route::post('/', [DriverzoneController::class, 'store'])->name('store');

    Route::group(['prefix' => '{driverzone}'], function () {
        Route::get('/', [DriverzoneController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Driverzone $driverzone) {
                $trail->parent('admin.driverzone.index')
                    ->push($driverzone->id, route('admin.driverzone.show', $driverzone));
            });

        Route::get('edit', [DriverzoneController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Driverzone $driverzone) {
                $trail->parent('admin.driverzone.show', $driverzone)
                    ->push(__('Edit'), route('admin.driverzone.edit', $driverzone));
            });

        Route::patch('/', [DriverzoneController::class, 'update'])->name('update');
        Route::delete('/', [DriverzoneController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedDriverzone}'], function () {
        Route::patch('restore', [DeletedDriverzoneController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedDriverzoneController::class, 'destroy'])->name('permanently-delete');
    });
});