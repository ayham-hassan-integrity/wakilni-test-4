<?php

use App\Domains\User\Http\Controllers\Backend\User\DeletedUserController;
use App\Domains\User\Http\Controllers\Backend\User\UserController;
use App\Domains\User\Models\User;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
], function () {

    Route::get('/', [UserController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Users'), route('admin.user.index'));
        });


    Route::get('deleted', [DeletedUserController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.user.index')
                ->push(__('Deleted  Users'), route('admin.user.deleted'));
        });


    Route::get('create', [UserController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.user.index')
                ->push(__('Create User'), route('admin.user.create'));
        });

    Route::post('/', [UserController::class, 'store'])->name('store');

    Route::group(['prefix' => '{user}'], function () {
        Route::get('/', [UserController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, User $user) {
                $trail->parent('admin.user.index')
                    ->push($user->id, route('admin.user.show', $user));
            });

        Route::get('edit', [UserController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, User $user) {
                $trail->parent('admin.user.show', $user)
                    ->push(__('Edit'), route('admin.user.edit', $user));
            });

        Route::patch('/', [UserController::class, 'update'])->name('update');
        Route::delete('/', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedUser}'], function () {
        Route::patch('restore', [DeletedUserController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedUserController::class, 'destroy'])->name('permanently-delete');
    });
});