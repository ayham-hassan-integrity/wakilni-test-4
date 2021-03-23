<?php

use App\Domains\LocationLog\Http\Controllers\Backend\Locationlog\DeletedLocationlogController;
use App\Domains\LocationLog\Http\Controllers\Backend\Locationlog\LocationlogController;
use App\Domains\LocationLog\Models\Locationlog;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'locationlog',
    'as' => 'locationlog.',
], function () {

    Route::get('/', [LocationlogController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Locationlogs'), route('admin.locationlog.index'));
        });


    Route::get('deleted', [DeletedLocationlogController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.locationlog.index')
                ->push(__('Deleted  Locationlogs'), route('admin.locationlog.deleted'));
        });


    Route::get('create', [LocationlogController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.locationlog.index')
                ->push(__('Create Locationlog'), route('admin.locationlog.create'));
        });

    Route::post('/', [LocationlogController::class, 'store'])->name('store');

    Route::group(['prefix' => '{locationlog}'], function () {
        Route::get('/', [LocationlogController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Locationlog $locationlog) {
                $trail->parent('admin.locationlog.index')
                    ->push($locationlog->id, route('admin.locationlog.show', $locationlog));
            });

        Route::get('edit', [LocationlogController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Locationlog $locationlog) {
                $trail->parent('admin.locationlog.show', $locationlog)
                    ->push(__('Edit'), route('admin.locationlog.edit', $locationlog));
            });

        Route::patch('/', [LocationlogController::class, 'update'])->name('update');
        Route::delete('/', [LocationlogController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedLocationlog}'], function () {
        Route::patch('restore', [DeletedLocationlogController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedLocationlogController::class, 'destroy'])->name('permanently-delete');
    });
});