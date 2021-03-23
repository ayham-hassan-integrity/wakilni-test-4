<?php

use App\Domains\ActivityLog\Http\Controllers\Backend\Activitylog\DeletedActivitylogController;
use App\Domains\ActivityLog\Http\Controllers\Backend\Activitylog\ActivitylogController;
use App\Domains\ActivityLog\Models\Activitylog;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'activitylog',
    'as' => 'activitylog.',
], function () {

    Route::get('/', [ActivitylogController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Activitylogs'), route('admin.activitylog.index'));
        });


    Route::get('deleted', [DeletedActivitylogController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.activitylog.index')
                ->push(__('Deleted  Activitylogs'), route('admin.activitylog.deleted'));
        });


    Route::get('create', [ActivitylogController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.activitylog.index')
                ->push(__('Create Activitylog'), route('admin.activitylog.create'));
        });

    Route::post('/', [ActivitylogController::class, 'store'])->name('store');

    Route::group(['prefix' => '{activitylog}'], function () {
        Route::get('/', [ActivitylogController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Activitylog $activitylog) {
                $trail->parent('admin.activitylog.index')
                    ->push($activitylog->id, route('admin.activitylog.show', $activitylog));
            });

        Route::get('edit', [ActivitylogController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Activitylog $activitylog) {
                $trail->parent('admin.activitylog.show', $activitylog)
                    ->push(__('Edit'), route('admin.activitylog.edit', $activitylog));
            });

        Route::patch('/', [ActivitylogController::class, 'update'])->name('update');
        Route::delete('/', [ActivitylogController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedActivitylog}'], function () {
        Route::patch('restore', [DeletedActivitylogController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedActivitylogController::class, 'destroy'])->name('permanently-delete');
    });
});