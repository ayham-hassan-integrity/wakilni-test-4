<?php

use App\Domains\TelescopeEntry\Http\Controllers\Backend\Telescopeentry\DeletedTelescopeentryController;
use App\Domains\TelescopeEntry\Http\Controllers\Backend\Telescopeentry\TelescopeentryController;
use App\Domains\TelescopeEntry\Models\Telescopeentry;
use Tabuna\Breadcrumbs\Trail;

Route::group([
    'prefix' => 'telescopeentry',
    'as' => 'telescopeentry.',
], function () {

    Route::get('/', [TelescopeentryController::class, 'index'])
        ->name('index')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.dashboard')
                ->push(__(' Telescopeentries'), route('admin.telescopeentry.index'));
        });


    Route::get('deleted', [DeletedTelescopeentryController::class, 'index'])
        ->name('deleted')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.telescopeentry.index')
                ->push(__('Deleted  Telescopeentries'), route('admin.telescopeentry.deleted'));
        });


    Route::get('create', [TelescopeentryController::class, 'create'])
        ->name('create')
        ->breadcrumbs(function (Trail $trail) {
            $trail->parent('admin.telescopeentry.index')
                ->push(__('Create Telescopeentry'), route('admin.telescopeentry.create'));
        });

    Route::post('/', [TelescopeentryController::class, 'store'])->name('store');

    Route::group(['prefix' => '{telescopeentry}'], function () {
        Route::get('/', [TelescopeentryController::class, 'show'])
            ->name('show')
            ->breadcrumbs(function (Trail $trail, Telescopeentry $telescopeentry) {
                $trail->parent('admin.telescopeentry.index')
                    ->push($telescopeentry->id, route('admin.telescopeentry.show', $telescopeentry));
            });

        Route::get('edit', [TelescopeentryController::class, 'edit'])
            ->name('edit')
            ->breadcrumbs(function (Trail $trail, Telescopeentry $telescopeentry) {
                $trail->parent('admin.telescopeentry.show', $telescopeentry)
                    ->push(__('Edit'), route('admin.telescopeentry.edit', $telescopeentry));
            });

        Route::patch('/', [TelescopeentryController::class, 'update'])->name('update');
        Route::delete('/', [TelescopeentryController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '{deletedTelescopeentry}'], function () {
        Route::patch('restore', [DeletedTelescopeentryController::class, 'update'])->name('restore');
        Route::delete('permanently-delete', [DeletedTelescopeentryController::class, 'destroy'])->name('permanently-delete');
    });
});