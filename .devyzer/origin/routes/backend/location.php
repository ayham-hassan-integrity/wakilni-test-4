<?php

use App\Domains\Location\Http\Controllers\Backend\Location\DeletedLocationController;
use App\Domains\Location\Http\Controllers\Backend\Location\LocationController;
use App\Domains\Location\Models\Location;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'location',
    'as' => 'location.',
], function () {

    Route::get('/', [LocationController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Locations'), route('admin.location.index'));
        });


    Route::get('deleted', [DeletedLocationController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.location.index')
                ->push(__('Deleted  Locations'), route('admin.location.deleted'));
        });


    Route::get('create', [LocationController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.location.index')
                ->push(__('Create Location'), route('admin.location.create'));
        });

    Route::post('/', [LocationController::class, 'store'])->name('store');

    Route::group(['prefix' => '{location}'], function () {
        Route::get('/', [LocationController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Location $location) {
                $trail->parent('admin.location.index')
                    ->push($location->id, route('admin.location.show', $location));
            });

        Route::get('edit', [LocationController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Location $location) {
                $trail->parent('admin.location.show', $location)
                    ->push(__('Edit'), route('admin.location.edit', $location));
            });

        Route::patch('/', [LocationController::class, 'update'])->name('update');
        Route::delete('/', [LocationController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedLocation}'], function () {
        Route::patch('restore', [DeletedLocationController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedLocationController::class, 'destroy'])->name('permanently-delete');
    });
});