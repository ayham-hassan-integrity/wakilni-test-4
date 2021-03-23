<?php

use App\Domains\Role\Http\Controllers\Backend\Role\DeletedRoleController;
use App\Domains\Role\Http\Controllers\Backend\Role\RoleController;
use App\Domains\Role\Models\Role;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'role',
    'as' => 'role.',
], function () {

    Route::get('/', [RoleController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Roles'), route('admin.role.index'));
        });


    Route::get('deleted', [DeletedRoleController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.role.index')
                ->push(__('Deleted  Roles'), route('admin.role.deleted'));
        });


    Route::get('create', [RoleController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.role.index')
                ->push(__('Create Role'), route('admin.role.create'));
        });

    Route::post('/', [RoleController::class, 'store'])->name('store');

    Route::group(['prefix' => '{role}'], function () {
        Route::get('/', [RoleController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Role $role) {
                $trail->parent('admin.role.index')
                    ->push($role->id, route('admin.role.show', $role));
            });

        Route::get('edit', [RoleController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Role $role) {
                $trail->parent('admin.role.show', $role)
                    ->push(__('Edit'), route('admin.role.edit', $role));
            });

        Route::patch('/', [RoleController::class, 'update'])->name('update');
        Route::delete('/', [RoleController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedRole}'], function () {
        Route::patch('restore', [DeletedRoleController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedRoleController::class, 'destroy'])->name('permanently-delete');
    });
});