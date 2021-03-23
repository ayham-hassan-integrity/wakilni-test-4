<?php

use App\Domains\Zone\Http\Controllers\Backend\Zone\DeletedZoneController;
use App\Domains\Zone\Http\Controllers\Backend\Zone\ZoneController;
use App\Domains\Zone\Models\Zone;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'zone',
    'as' => 'zone.',
], function () {

    Route::get('/', [ZoneController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Zones'), route('admin.zone.index'));
        });


    Route::get('deleted', [DeletedZoneController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.zone.index')
                ->push(__('Deleted  Zones'), route('admin.zone.deleted'));
        });


    Route::get('create', [ZoneController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.zone.index')
                ->push(__('Create Zone'), route('admin.zone.create'));
        });

    Route::post('/', [ZoneController::class, 'store'])->name('store');

    Route::group(['prefix' => '{zone}'], function () {
        Route::get('/', [ZoneController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Zone $zone) {
                $trail->parent('admin.zone.index')
                    ->push($zone->id, route('admin.zone.show', $zone));
            });

        Route::get('edit', [ZoneController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Zone $zone) {
                $trail->parent('admin.zone.show', $zone)
                    ->push(__('Edit'), route('admin.zone.edit', $zone));
            });

        Route::patch('/', [ZoneController::class, 'update'])->name('update');
        Route::delete('/', [ZoneController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedZone}'], function () {
        Route::patch('restore', [DeletedZoneController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedZoneController::class, 'destroy'])->name('permanently-delete');
    });
});