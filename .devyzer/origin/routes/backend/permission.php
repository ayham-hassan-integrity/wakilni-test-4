<?php

use App\Domains\Permission\Http\Controllers\Backend\Permission\DeletedPermissionController;
use App\Domains\Permission\Http\Controllers\Backend\Permission\PermissionController;
use App\Domains\Permission\Models\Permission;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'permission',
    'as' => 'permission.',
], function () {

    Route::get('/', [PermissionController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Permissions'), route('admin.permission.index'));
        });


    Route::get('deleted', [DeletedPermissionController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.permission.index')
                ->push(__('Deleted  Permissions'), route('admin.permission.deleted'));
        });


    Route::get('create', [PermissionController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.permission.index')
                ->push(__('Create Permission'), route('admin.permission.create'));
        });

    Route::post('/', [PermissionController::class, 'store'])->name('store');

    Route::group(['prefix' => '{permission}'], function () {
        Route::get('/', [PermissionController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Permission $permission) {
                $trail->parent('admin.permission.index')
                    ->push($permission->id, route('admin.permission.show', $permission));
            });

        Route::get('edit', [PermissionController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Permission $permission) {
                $trail->parent('admin.permission.show', $permission)
                    ->push(__('Edit'), route('admin.permission.edit', $permission));
            });

        Route::patch('/', [PermissionController::class, 'update'])->name('update');
        Route::delete('/', [PermissionController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedPermission}'], function () {
        Route::patch('restore', [DeletedPermissionController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedPermissionController::class, 'destroy'])->name('permanently-delete');
    });
});