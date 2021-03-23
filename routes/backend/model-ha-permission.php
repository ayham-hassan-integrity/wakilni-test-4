<?php

use App\Domains\ModelHaPermission\Http\Controllers\Backend\Modelhapermission\DeletedModelhapermissionController;
use App\Domains\ModelHaPermission\Http\Controllers\Backend\Modelhapermission\ModelhapermissionController;
use App\Domains\ModelHaPermission\Models\Modelhapermission;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'modelhapermission',
    'as' => 'modelhapermission.',
], function () {

    Route::get('/', [ModelhapermissionController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Modelhapermissions'), route('admin.modelhapermission.index'));
        });


    Route::get('deleted', [DeletedModelhapermissionController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.modelhapermission.index')
                ->push(__('Deleted  Modelhapermissions'), route('admin.modelhapermission.deleted'));
        });


    Route::get('create', [ModelhapermissionController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.modelhapermission.index')
                ->push(__('Create Modelhapermission'), route('admin.modelhapermission.create'));
        });

    Route::post('/', [ModelhapermissionController::class, 'store'])->name('store');

    Route::group(['prefix' => '{modelhapermission}'], function () {
        Route::get('/', [ModelhapermissionController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Modelhapermission $modelhapermission) {
                $trail->parent('admin.modelhapermission.index')
                    ->push($modelhapermission->id, route('admin.modelhapermission.show', $modelhapermission));
            });

        Route::get('edit', [ModelhapermissionController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Modelhapermission $modelhapermission) {
                $trail->parent('admin.modelhapermission.show', $modelhapermission)
                    ->push(__('Edit'), route('admin.modelhapermission.edit', $modelhapermission));
            });

        Route::patch('/', [ModelhapermissionController::class, 'update'])->name('update');
        Route::delete('/', [ModelhapermissionController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedModelhapermission}'], function () {
        Route::patch('restore', [DeletedModelhapermissionController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedModelhapermissionController::class, 'destroy'])->name('permanently-delete');
    });
});