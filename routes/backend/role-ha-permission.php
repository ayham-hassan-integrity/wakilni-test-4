<?php

use App\Domains\RoleHaPermission\Http\Controllers\Backend\Rolehapermission\DeletedRolehapermissionController;
use App\Domains\RoleHaPermission\Http\Controllers\Backend\Rolehapermission\RolehapermissionController;
use App\Domains\RoleHaPermission\Models\Rolehapermission;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'rolehapermission',
    'as' => 'rolehapermission.',
], function () {

    Route::get('/', [RolehapermissionController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Rolehapermissions'), route('admin.rolehapermission.index'));
        });


    Route::get('deleted', [DeletedRolehapermissionController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.rolehapermission.index')
                ->push(__('Deleted  Rolehapermissions'), route('admin.rolehapermission.deleted'));
        });


    Route::get('create', [RolehapermissionController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.rolehapermission.index')
                ->push(__('Create Rolehapermission'), route('admin.rolehapermission.create'));
        });

    Route::post('/', [RolehapermissionController::class, 'store'])->name('store');

    Route::group(['prefix' => '{rolehapermission}'], function () {
        Route::get('/', [RolehapermissionController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Rolehapermission $rolehapermission) {
                $trail->parent('admin.rolehapermission.index')
                    ->push($rolehapermission->id, route('admin.rolehapermission.show', $rolehapermission));
            });

        Route::get('edit', [RolehapermissionController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Rolehapermission $rolehapermission) {
                $trail->parent('admin.rolehapermission.show', $rolehapermission)
                    ->push(__('Edit'), route('admin.rolehapermission.edit', $rolehapermission));
            });

        Route::patch('/', [RolehapermissionController::class, 'update'])->name('update');
        Route::delete('/', [RolehapermissionController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedRolehapermission}'], function () {
        Route::patch('restore', [DeletedRolehapermissionController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedRolehapermissionController::class, 'destroy'])->name('permanently-delete');
    });
});