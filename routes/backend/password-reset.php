<?php

use App\Domains\PasswordReset\Http\Controllers\Backend\Passwordreset\DeletedPasswordresetController;
use App\Domains\PasswordReset\Http\Controllers\Backend\Passwordreset\PasswordresetController;
use App\Domains\PasswordReset\Models\Passwordreset;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'passwordreset',
    'as' => 'passwordreset.',
], function () {

    Route::get('/', [PasswordresetController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Passwordresets'), route('admin.passwordreset.index'));
        });


    Route::get('deleted', [DeletedPasswordresetController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.passwordreset.index')
                ->push(__('Deleted  Passwordresets'), route('admin.passwordreset.deleted'));
        });


    Route::get('create', [PasswordresetController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.passwordreset.index')
                ->push(__('Create Passwordreset'), route('admin.passwordreset.create'));
        });

    Route::post('/', [PasswordresetController::class, 'store'])->name('store');

    Route::group(['prefix' => '{passwordreset}'], function () {
        Route::get('/', [PasswordresetController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Passwordreset $passwordreset) {
                $trail->parent('admin.passwordreset.index')
                    ->push($passwordreset->id, route('admin.passwordreset.show', $passwordreset));
            });

        Route::get('edit', [PasswordresetController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Passwordreset $passwordreset) {
                $trail->parent('admin.passwordreset.show', $passwordreset)
                    ->push(__('Edit'), route('admin.passwordreset.edit', $passwordreset));
            });

        Route::patch('/', [PasswordresetController::class, 'update'])->name('update');
        Route::delete('/', [PasswordresetController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedPasswordreset}'], function () {
        Route::patch('restore', [DeletedPasswordresetController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedPasswordresetController::class, 'destroy'])->name('permanently-delete');
    });
});