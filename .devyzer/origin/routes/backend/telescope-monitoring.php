<?php

use App\Domains\TelescopeMonitoring\Http\Controllers\Backend\Telescopemonitoring\DeletedTelescopemonitoringController;
use App\Domains\TelescopeMonitoring\Http\Controllers\Backend\Telescopemonitoring\TelescopemonitoringController;
use App\Domains\TelescopeMonitoring\Models\Telescopemonitoring;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'telescopemonitoring',
    'as' => 'telescopemonitoring.',
], function () {

    Route::get('/', [TelescopemonitoringController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Telescopemonitorings'), route('admin.telescopemonitoring.index'));
        });


    Route::get('deleted', [DeletedTelescopemonitoringController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.telescopemonitoring.index')
                ->push(__('Deleted  Telescopemonitorings'), route('admin.telescopemonitoring.deleted'));
        });


    Route::get('create', [TelescopemonitoringController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.telescopemonitoring.index')
                ->push(__('Create Telescopemonitoring'), route('admin.telescopemonitoring.create'));
        });

    Route::post('/', [TelescopemonitoringController::class, 'store'])->name('store');

    Route::group(['prefix' => '{telescopemonitoring}'], function () {
        Route::get('/', [TelescopemonitoringController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Telescopemonitoring $telescopemonitoring) {
                $trail->parent('admin.telescopemonitoring.index')
                    ->push($telescopemonitoring->id, route('admin.telescopemonitoring.show', $telescopemonitoring));
            });

        Route::get('edit', [TelescopemonitoringController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Telescopemonitoring $telescopemonitoring) {
                $trail->parent('admin.telescopemonitoring.show', $telescopemonitoring)
                    ->push(__('Edit'), route('admin.telescopemonitoring.edit', $telescopemonitoring));
            });

        Route::patch('/', [TelescopemonitoringController::class, 'update'])->name('update');
        Route::delete('/', [TelescopemonitoringController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedTelescopemonitoring}'], function () {
        Route::patch('restore', [DeletedTelescopemonitoringController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedTelescopemonitoringController::class, 'destroy'])->name('permanently-delete');
    });
});